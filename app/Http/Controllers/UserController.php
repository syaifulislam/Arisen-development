<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Mail;

class UserController extends Controller
{
    protected $_routeGroup = '/auth';

    public function authenticate(Request $request){
        try{
            $authenticate = Sentinel::authenticate($request->except('_token'));
            if(!$authenticate){
                //salah email auat password
                return redirect()->back(); 
            }
            return view('home-page');
        }catch(\Exception $e){
            if($e->getMessage() == 'Your account has not been activated yet.'){
                // bila akun belum aktivasi melalui email
            }
            return redirect()->back();
        }
        
    }

    public function registerUsers(Request $request){
        $credentials = $request->except('_token','confirmPassword');
        $credentials['is_verif'] = 0;
        $credentials['role_user'] = 'user';
        Sentinel::register($credentials);
        return redirect($this->_routeGroup.'/login');
    }

    public function mail(){
        $data = array('name'=>"Sam Jose", "body" => "Test mail");
    
        Mail::send('mail-verif', $data, function($message) {
            $message->to('yudhagustavianto@gmail.com', 'Arisen Test Mail Send')
                    ->subject('Test Active Email');
            $message->from('info.arisen@gmail.com','Info Arisen');
        });
        dd("kirim");
    }
}
