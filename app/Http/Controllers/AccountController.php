<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Users;
use App\UserDetails;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\File;


class AccountController extends Controller
{
    public function index(){
        $data = Users::where('id',Sentinel::getUser()->id)->with('user_details')->first();
        return view('account-detail',compact('data'));
    }

    public function verification(Request $request){
        $params = $request->except('_token','fileToUpload','login');
        $image      = $request->file('fileToUpload');
        $fileName   = Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put($fileName, File::get($image));
        $params['user_id'] = Sentinel::getUser()->id;
        $params['money'] = 0;
        $params['images_path'] = $fileName;
        UserDetails::create($params);
        return redirect()->back();
    }
}
