<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Akaunting\Money\Currency;
use Akaunting\Money\Money;
use App\UserDetails;
use App\PaymentHistory;
use Sentinel;
use Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;


class SetorController extends Controller
{
    public function index(){
        $getMoney = UserDetails::where('user_id',Sentinel::getUser()->id)->first();
        $myMoney = Money::IDR($getMoney->money,true)->format();
        return view('tarik-dana',compact('myMoney'));
    }

    public function requestMoney(Request $request){
        $params = $request->only('request_nominal');
        $params['user_id'] = Sentinel::getUser()->id;
        $params['payment_type_id'] = 1;
        $params['status'] = 'Pending';
        $params['created_at'] = Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s');
        $params['updated_at'] = Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s');
        PaymentHistory::insert($params);
        return redirect('riwayat-keuangan');
    }

    public function history(){
        $myMoney = Money::IDR(Sentinel::getUser()->money,true)->format();
        $getData = PaymentHistory::with('payment_type')->where('user_id',Sentinel::getUser()->id)->orderBy('created_at','desc')->get();
        return view('detail-saldo',compact('myMoney','getData'));
    }

    public function setorIndex(){
        $getMoney = UserDetails::where('user_id',Sentinel::getUser()->id)->first();
        $myMoney = Money::IDR($getMoney->money,true)->format();
        return view('setor-dana',compact('myMoney'));
    }

    public function setorCreate(Request $request){
        $image      = $request->file('fileToUpload');
        $fileName   = 'setor-'.Sentinel::getUser()->id.'.'.time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put($fileName, File::get($image));
        $params['image_path'] = $fileName;
        $params['user_id'] = Sentinel::getUser()->id;
        $params['payment_type_id'] = 2;
        $params['status'] = 'Pending';
        $params['request_nominal'] = $request->post('request_nominal');
        $params['created_at'] = Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s');
        $params['updated_at'] = Carbon::now()->setTimezone('+7')->format('Y-m-d H:i:s');
        PaymentHistory::insert($params);
        return redirect('riwayat-keuangan');
    }
}
