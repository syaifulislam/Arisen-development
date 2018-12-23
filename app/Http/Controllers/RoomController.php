<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Room;
use Carbon\Carbon;
use App\JoinRoom;
use App\UserRoomPaymentHistory;
use DB;

class RoomController extends Controller
{
    public function index(){
        $dataRoom = JoinRoom::with('room')->where('user_id',Sentinel::getUser()->id)->get();
        return view('my-room',compact('dataRoom'));
    }

    public function create(){
        if(Sentinel::getUser()->is_verif == 2){
            return redirect()->back()->with('alert', 'Akun Anda Telah Ditolak');
        }else if(Sentinel::getUser()->is_verif == 0){
            return redirect('/my-account')->with('alert', 'Silahkan Aktivasi Akun Anda Terlebih Dahulu');
        }
        return view('create-room');
    }

    public function createRoom(Request $request){
        // period_start_date
        if($request->has('public')){
            $params = $request->except('_token','login','public','private','passwordConfirm','password');
        }else{// kalo dia private
            $params = $request->except('_token','login','public','private','passwordConfirm');
            $params['password'] = md5($params['password']);
        }
        if($params['period'] == "Mingguan"){
            $params['period_start_date'] = Carbon::now()->addWeek()->format('Y-m-d');
        }else if($params['period'] == "Bulanan"){
            $params['period_start_date'] = Carbon::now()->addMonth()->format('Y-m-d');
        }else{
            $params['period_start_date'] = Carbon::now()->addYear()->format('Y-m-d');
        }
        try{
            DB::beginTransaction();
            $params['period_status'] = 'Belum Mulai';
            $params['created_by'] = Sentinel::getUser()->id;
            $params['total_player_join'] = 0;
            $params['generate_id'] =  rand(10,99).Carbon::now()->setTimezone('+7')->format('Ymd');
            $params['created_at'] = Carbon::now()->setTimezone('+7');
            $params['updated_at'] = Carbon::now()->setTimezone('+7');
            $data = Room::insert($params);
            $this->addRoom(Sentinel::getUser()->id,$params['generate_id']);
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            return redirect('forum');
        }
        return redirect('/ruangan-arisan/'.$params['generate_id']);
    }

    public function room($id){
        if(Sentinel::getUser()->is_verif == 2){
            return redirect()->back()->with('alert', 'Akun Anda Telah Ditolak');
        }else if(Sentinel::getUser()->is_verif == 0){
            return redirect('/my-account')->with('alert', 'Silahkan Aktivasi Akun Anda Terlebih Dahulu');
        }
        $data = Room::where('generate_id',$id)->first();
        $getTime = Carbon::now()->setTimezone('+7');
        $getDataTimes = $data->period_start_date." 07:00:00";
        if (Carbon::parse($getDataTimes) <= Carbon::now()) {
            $boolStart = false;
        } else {
            $boolStart = true;
        }
        $joinRoom = JoinRoom::where('user_id',Sentinel::getUser()->id)->where('room_id',$data->id)->first();
        return view('ruangan-arisan',compact('id','data','getDataTimes','joinRoom','boolStart'));
    }

    public function checkPassword($id, Request $request){
        $password = md5($request->input('password'));
        $checkData = Room::where('generate_id',$id)->first();
        if($checkData->password == $password){
            return response()->json([
                "data"=> true,
                "message"=>""
            ]);
        }
        return response()->json([
            "data"=>false,
            "message"=>"Password Salah"
        ]);
    }

    public function addRoom($userId,$roomId){
        $getDataRoom = Room::where('generate_id',$roomId)->first();
        try{
            DB::beginTransaction();
            $joinRoom = new JoinRoom;
            $joinRoom->user_id = $userId;
            $joinRoom->room_id = $getDataRoom->id;
            $joinRoom->save();

            for($i=1;$i<=$getDataRoom->total_player;$i++){
                $paymentHistories               = new UserRoomPaymentHistory;
                $paymentHistories->user_id      = $userId;
                $paymentHistories->room_id      = $getDataRoom->id;
                $paymentHistories->period_roll  = $i;
                $paymentHistories->status       = 'Belum Bayar';
                $paymentHistories->save();
            }
            Room::where('generate_id',$roomId)->increment('total_player_join');
            DB::commit();
            return redirect('/ruangan-arisan/'.$roomId);
        }catch(\Exception $e){
            DB::rollback();
            return redirect('/ruangan-arisan/'.$roomId);
        }
    }
}
