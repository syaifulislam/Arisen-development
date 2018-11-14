<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Sentinel;

class ForumController extends Controller
{
    public function index(){
        $dataRoom = Room::where('created_by',Sentinel::getUser()->id)->get();
        return view('forum',compact('dataRoom'));
    }
}
