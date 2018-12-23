<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Sentinel;

class NotificationController extends Controller
{
    public function index(){
        $data = Notification::where('user_id',Sentinel::getUser()->id)->orderBy('created_at','desc')->get();
        return view('notification-user',compact('data'));
    }
}
