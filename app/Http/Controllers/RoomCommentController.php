<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomComment;
use Sentinel;
use Carbon\Carbon;

class RoomCommentController extends Controller
{
    public function create(Request $request,$id){
        RoomComment::insert([
            'user_id'   =>  Sentinel::getUser()->id,
            'room_id'   =>  $id,
            'comment'   =>  $request->post("comment"),
            'created_at'=>  Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s'),
            'flag_view' =>  0
        ]);
        return response()->json([
            "data" =>   "masuk"
        ]);
    }

    public function index($id){
        $data = RoomComment::with('user')->where('room_id',$id)->orderBy('created_at','asc');
        $commentView = $data->get();
        foreach($commentView as $value){
            $value->tanggal = Carbon::parse($value->created_at)->format('M d');
            $value->tahun = Carbon::parse($value->created_at)->format('y');
        }
        return response()->json([
            "data" =>   $commentView
        ]);
    }

    public function update($id){
        $data = RoomComment::with('user')->where('room_id',$id)->orderBy('created_at','asc');
        $commentView = $data->get();
        foreach($commentView as $value){
            $value->tanggal = Carbon::parse($value->created_at)->format('M d');
            $value->tahun = Carbon::parse($value->created_at)->format('y');
        }
        return response()->json([
            "data" =>   $commentView
        ]);
    }
}
