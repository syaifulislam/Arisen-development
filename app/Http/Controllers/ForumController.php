<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Sentinel;

class ForumController extends Controller
{
    public function index(Request $request){
        $dataRoom = Room::select();
        if ($request->has('search2')) {
            $dataRoom = $dataRoom->where('room_name','like','%'.$request->get('search2').'%');
            $search = $request->get('search2');
        }else{
            $search = null;
        }
        $dataRoom = $dataRoom->get();
        return view('forum',compact('dataRoom','search'));
    }
}
