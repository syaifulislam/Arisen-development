<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Room;
use Carbon\Carbon;

class RoomController extends Controller
{
    public function index(){
        $dataRoom = Room::where('created_by',Sentinel::getUser()->id)->get();
        return view('my-room',compact('dataRoom'));
    }

    public function create(){
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
        $params['period_status'] = 'Belum Mulai';
        $params['created_by'] = Sentinel::getUser()->id;
        $params['total_player_join'] = 0;
        $params['generate_id'] =  rand(10,99).Carbon::now()->setTimezone('+7')->format('Ymd');
        $params['created_at'] = Carbon::now()->setTimezone('+7');
        $params['updated_at'] = Carbon::now()->setTimezone('+7');
        Room::insert($params);
        return redirect('forum');
    }

    public function room($id){
        $data = Room::where('generate_id',$id)->first();
        return view('ruangan-arisan',compact('id','data'));
    }
}
