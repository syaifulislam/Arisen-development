<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Room;
use Carbon\Carbon;

class RoomController extends Controller
{
    public function index(){
        return view('my-room');
    }

    public function create(){
        return view('create-room');
    }

    public function createRoom(Request $request){
        if($request->has('public')){
            $params = $request->except('_token','login','public','private','passwordConfirm','password');
        }else{// kalo dia private
            $params = $request->except('_token','login','public','private','passwordConfirm');
            $params['password'] = md5($params['password']);
        }
        $params['created_by'] = Sentinel::getUser()->id;
        $params['total_player_join'] = 0;
        $params['generate_id'] =  rand(10,99).Carbon::now()->setTimezone('+7')->format('Ymd');
        $params['created_at'] = Carbon::now()->setTimezone('+7');
        $params['updated_at'] = Carbon::now()->setTimezone('+7');
        Room::insert($params);
        return redirect('forum');
    }
}
