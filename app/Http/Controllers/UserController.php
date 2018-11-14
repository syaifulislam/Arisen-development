<?php

namespace App\Http\Controllers;

use Mail;
use Sentinel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Activation;
use App\Users;
use App\Http\Requests\registerRequest;
use App\Http\Requests\forgotPasswordRequest;

class UserController extends Controller
{
    protected $_routeGroup = '/auth';

    public function authenticate(Request $request){
        
        try{
            $authenticate = Sentinel::authenticate($request->except('_token'));
            if(!$authenticate){
                return redirect()->back()->withErrors(['Nama Pengguna Atau Password Salah']);
            }
            return redirect('/');
        }catch(\Exception $e){
            if($e->getMessage() == 'Your account has not been activated yet.'){
                return redirect()->back()->withErrors(['Aktivasi Email Anda Terlebih Dahulu']);
            }
            return redirect()->back();
        }
        
    }

    public function registerUsers(registerRequest $request){
        $credentials = $request->except('_token','confirmPassword');
        $credentials['is_verif'] = 0;
        $credentials['role_user'] = 'user';
        $credentials['user_code'] = 'AR-'.Carbon::now()->setTimezone('+7')->format('Ymd').'-'.rand(10000,99999);
        $register = Sentinel::register($credentials);
        $encrypt = Crypt::encryptString($register->id.'/'.Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s'));
        $url = $request->server->getHeaders()['ORIGIN'].'/auth/verifEmail/'.$encrypt;
        $data = array(
            'id'=>$register->id,
            'email'=>$credentials['email'],
            'timeRegister'=>Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s'),
            'url'=>$url,
            'subject'=>'Active Your Email',
            'page'=>'mail-verif'
        );
        $senMail = $this->mail($data);
        return redirect($this->_routeGroup.'/login')->with('message', 'Silahkan cek email anda');
    }

    public function emailVerification($callback){
        $decrypted = Crypt::decryptString($callback);
        $explodeDecrypt = explode('/',$decrypted);
        $timeRequest = Carbon::parse($explodeDecrypt[1],'+7');
        $timeNow = Carbon::now()->setTimezone('+7');
        $timeDiff = $timeRequest->diffInMinutes($timeNow);
        if($timeDiff > 120){
            return redirect($this->_routeGroup.'/expired');
        }
        $user = Sentinel::findById($explodeDecrypt[0]);
        $activeUser = Activation::create($user);
        Activation::complete($user, $activeUser->code);
        return redirect($this->_routeGroup.'/login')->with('message', 'Verifikasi berhasil');
    }

    public function logout(){
        Sentinel::logout();
        return redirect($this->_routeGroup.'/login');
    }

    public function forgotPassword(forgotPasswordRequest $request){
        $email = $request->input('email');
        $findUserByEmail = Users::where('email',$email)->first();
        // jika tidak ditemukan user dengan email tersebut
        if(!$findUserByEmail)
            return redirect()->back();
        
        $encrypt = Crypt::encryptString($findUserByEmail->id.'/'.Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s'));
        $url = $request->server->getHeaders()['ORIGIN'].'/auth/forgot-password-verification/'.$encrypt;
        $data = array(
            'id'=>$findUserByEmail->id,
            'email'=>$email,
            'timeRegister'=>Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s'),
            'url'=>$url,
            'subject'=>'Forgot Password',
            'page'=>'mail-forgot-password'
        );
        $senMail = $this->mail($data);
        return redirect($this->_routeGroup.'/login')->with('message', 'Silahkan cek email anda');
    }

    public function changePassword($callback){
        $decrypted = Crypt::decryptString($callback);
        $explodeDecrypt = explode('/',$decrypted);
        $timeRequest = Carbon::parse($explodeDecrypt[1],'+7');
        $timeNow = Carbon::now()->setTimezone('+7');
        $timeDiff = $timeRequest->diffInMinutes($timeNow);
        if($timeDiff > 120){
            return redirect($this->_routeGroup.'/expired');
        }
        $user = Sentinel::findById($explodeDecrypt[0]);
        return view('change-password',compact('user'));
    }

    public function actionChangePassword(Request $request){
        $user = Sentinel::findById($request->input('user_id'));
        Sentinel::update($user,$request->only('password'));
        return redirect($this->_routeGroup.'/login')->with('message', 'Password berhasil di ubah');
    }

    public function mail($data){   
        Mail::send($data['page'], $data, function($message) use($data){
            $message->to($data['email'], 'Email Verification')
                    ->subject($data['subject']);
            $message->from('info.arisen@gmail.com','Info Arisen');
        });
    }
}
