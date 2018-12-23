<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetails;
use App\User;
use App\Users;
use App\PaymentHistory;
use App\AdminImage;
use App\Arbar;
use App\ArbarDetail;
use App\Notification;
use Sentinel;
use Activation;
use Storage;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Exports\PaymentExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

    public function superAdmin(){
        $data = User::where('role_user','admin')->where('is_super_admin',0)->get();
        return view('add-admin',compact('data'));
    }
    public function home(){
        $data = User::where('role_user','admin')->where('is_super_admin',0)->get();
        return view('home-admin',compact('data'));
    }

    public function activate(){
        $data = UserDetails::with('user')->get();
        return view('aktivasi-akun-admin',compact('data'));
    }

    public function getUserActivate($id){
        $data = UserDetails::with('user')->where('user_id',$id)->first();
        return response()->json([
            "data" =>   $data
        ]);
    }

    public function actionActivate($user_id,$slug){
        User::where('id',$user_id)->update([
            'is_verif'=>$slug
        ]);
        $notif = new Notification;
        $notif->user_id = $user_id;
        if($slug == 1){
            $notif->status = 'berhasil';
        }else{
            $notif->status = 'ditolak';
        }
        $notif->title = 'Aktifasi';
        $notif->save();
        return redirect()->back();
    }

    public function setor(){
        $data = PaymentHistory::with('user')->where('payment_type_id',2)->orderBy('created_at','desc')->get();
        return view('setor-dana-admin',compact('data'));
    }

    public function getUserSetor($id){
        $data = PaymentHistory::with('user','user_detail')->where('id',$id)->first();
        return response()->json([
            "data" =>   $data
        ]);
    }

    public function actionSetor($id,$slug){
        $data = PaymentHistory::where('id',$id);
        $getNominal = $data->first()->request_nominal;
        if ($slug == 'Sudah di Proses') {
            UserDetails::where('user_id',$data->first()->user_id)->increment('money',$getNominal);
            $data->update([
                'status'    =>  $slug
            ]);
            $notif = 'berhasil';
        }else{
            PaymentHistory::where('id',$id)->update([
                'status'    =>  $slug
            ]);
            $notif = 'ditolak';
        }
        $insertNotif = new Notification;
        $insertNotif->user_id = $data->first()->user_id;
        $insertNotif->title = 'Setor Dana';
        $insertNotif->status = $notif;
        $insertNotif->save();
        return redirect()->back();
    }

    public function tarik(){
        $data = PaymentHistory::with('user')->where('payment_type_id',1)->orderBy('created_at','desc')->get();
        return view('tarik-dana-admin',compact('data'));
    }

    public function getUserTarik($id){
        $data = PaymentHistory::with('user','user_detail')->where('id',$id)->first();
        return response()->json([
            "data" =>   $data
        ]);
    }

    public function actionTarik(Request $request , $id){
        $image      = $request->file('fileToUpload');
        $fileName   = 'tarikKonfirmasi-'.Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put($fileName, File::get($image));
        $paymentHistory = PaymentHistory::where('id',$id);
        UserDetails::where('user_id',$paymentHistory->first()->user_id)->decrement('money',$paymentHistory->first()->request_nominal);
        $paymentHistory->update([
            'status'                =>  'Sudah di Proses',
            'image_path_confirm'    =>  $fileName
        ]);
        return redirect()->back();
    }

    public function keuangan(){
        $data = PaymentHistory::with('user','user_detail','payment_type')->orderBy('created_at','desc')->get();
        return view('riwayat-keuangan-admin',compact('data'));
    }

    public function getUserKeuangan($id){
        $data = PaymentHistory::with('user','user_detail','payment_type')->find($id);
        return response()->json([
            "data" =>   $data
        ]);
    }

    public function addAdmin(Request $request){
        $credentials = $request->except('_token','passwordConfirm','fileToUpload');
        $credentials['is_verif'] = 1;
        $credentials['role_user'] = 'admin';
        $credentials['user_code'] = 'AR-'.Carbon::now()->setTimezone('+7')->format('Ymd').'-'.rand(10000,99999);
        $register = Sentinel::register($credentials);
        $user = Sentinel::findById($register->id);
        $activeUser = Activation::create($user);
        Activation::complete($user, $activeUser->code);
        $image      = $request->file('fileToUpload');
        $fileName   = 'adminImage-'.Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put($fileName, File::get($image));
        AdminImage::insert([
            'user_id'       =>  $register->id,
            'image_path'    =>  $fileName
        ]);
        return redirect()->back();
    }

    public function getUserAdmin($id){
        $data = Users::with('admin_images','user_details')->where('id',$id)->first();
        return response()->json([
            "data" =>   $data
        ]);
    }

    public function changeAdmin(Request $request,$id){
        if ($request->post('password') == null) {
            $params = $request->only('first_name','last_name','username','email');
        }else{
            $params = $request->only('first_name','last_name','username','email','password');
        }
        if ($request->has('fileToUpload')) {
            $image      = $request->file('fileToUpload');
            $fileName   = 'adminImage-'.Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($fileName, File::get($image));
            AdminImage::where('user_id',$id)->update([
                'image_path'    =>  $fileName
            ]);
        }
        $user = Sentinel::findById($id);
        Sentinel::update($user,$params);
        return redirect()->back();
    }

    public function download(Request $request){
        $period = $request->post('period');
        if(!$period){
            return redirect()->back();
        }
        if ($period == 'mingguan') {
            $timeStart = Carbon::now()->startOfWeek()->format('Y-m-d');
            $timeEnd = Carbon::now()->endOfWeek()->format('Y-m-d');
        }else if ($period == 'bulanan') {
            $timeStart = Carbon::now()->startOfMonth()->format('Y-m-d');
            $timeEnd = Carbon::now()->endOfMonth()->format('Y-m-d');
        }else if ($period == 'tahunan') {
            $timeStart = Carbon::now()->startOfYear()->format('Y-m-d');
            $timeEnd = Carbon::now()->endOfYear()->format('Y-m-d');
        }
        return (new PaymentExport($period))->download('Data_Payment_Arisen_'.$period.'_from_'.$timeStart.'_to_'.$timeEnd.'.xlsx');
    }

    public function arbarStore(Request $request){
        $params = $request->except('_token','fileToUploadPromo','fileToUploadCoupon');
        $params['generate_id'] = (int)Sentinel::getUser()->id.rand(10000,99999);
        $params['created_at'] = Carbon::now()->setTimezone('+7');
        $params['updated_at'] = Carbon::now()->setTimezone('+7');
        if ($request->has('fileToUploadPromo')) {
            $image      = $request->file('fileToUploadPromo');
            $fileName   = 'ArbarPromo-'.Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($fileName, File::get($image));
            $params['promo_image_path'] = $fileName;
        }
        if ($request->has('fileToUploadCoupon')) {
            $image     = $request->file('fileToUploadCoupon');
            $fileName  = 'ArbarCoupon-'.Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($fileName, File::get($image));
            $params['coupon_image_path'] = $fileName;
        }
        Arbar::insert($params);
        return redirect()->back();
    }

    public function arbarIndex(){
        $data = Arbar::all();
        return view('arbar-admin',compact('data'));
    }

    public function getArbar($id){
        $data = Arbar::find($id);
        return response()->json([
            "data" =>   $data
        ]);
    }

    public function updateArbar(Request $request,$id){
        $params = $request->except('_token','fileToUploadPromo','fileToUploadCoupon');
        if ($request->has('fileToUploadPromo')) {
            $image      = $request->file('fileToUploadPromo');
            $fileName   = 'ArbarPromo-'.Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($fileName, File::get($image));
            $params['promo_image_path'] = $fileName;
        }
        if ($request->has('fileToUploadCoupon')) {
            $image     = $request->file('fileToUploadCoupon');
            $fileName  = 'ArbarCoupon-'.Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($fileName, File::get($image));
            $params['coupon_image_path'] = $fileName;
        }
        $data = Arbar::find($id)->update($params);
        return redirect()->back();
    }

    public function arbarDelete($id){
        Arbar::find($id)->delete();
        return redirect()->back();
    }
}
