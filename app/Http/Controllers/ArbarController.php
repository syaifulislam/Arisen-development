<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arbar;
use App\Room;
use App\JoinRoom;
use App\ArbarDetail;
use App\UserDetails;
use Sentinel;
use Carbon\Carbon;

class ArbarController extends Controller
{
    public function index(){
        $data = Arbar::all();
        return view('arbar',compact('data','dataRoom'));
    }

    public function getArbar($id){
        $data = Arbar::find($id);
        $dataRoom = JoinRoom::with('room')->where('user_id',Sentinel::getUser()->id)->get();
        return response()->json([
            "data"      =>  $data,
            "dataRoom"  =>  $dataRoom
        ]);
    }

    public function ambilArbar(Request $request, $id){
        if($request->post('room_id') == null){
            return redirect()->back()->with('alert', 'Pilih Ruangan Terlebih Dahulu');
        }else{
            $room = Room::find($request->post('room_id'));
            $dataArbar = Arbar::find($id);
            $dataCheck = ArbarDetail::where('user_id',Sentinel::getUser()->id)->where('arbar_id',$id)->where('room_id',$request->post('room_id'))->first();
            $checkSaldo = UserDetails::where('user_id',Sentinel::getUser()->id)->first();
            if(!$checkSaldo){
                return redirect()->back()->with('alert', 'Silahkan Isi Saldo Terlebih Dahulu');
            }else if($checkSaldo->money < $room->price_per_player){
                return redirect()->back()->with('alert', 'Saldo Anda Tidak Cukup');
            }
            // all validation
            if($dataCheck){
                return redirect()->back()->with('alert', 'Anda Telah Mengambil Arbar Ini Pada Tanggal '.Carbon::parse($dataCheck->created_at)->format('d F Y H:i:s'));
            }else if($dataArbar->total_player > $room->total_player_join){
                return redirect()->back()->with('alert', 'Total Pemain Tidak Mencukupi');
            }else if($dataArbar->coupon == $dataArbar->joined_player){
                return redirect()->back()->with('alert', 'Promo Arbar Ini Sudah Penuh');
            }
            // end validation
            
            $arbar = new ArbarDetail;
            $arbar->user_id = Sentinel::getUser()->id;
            $arbar->room_id = $request->post('room_id');
            $arbar->arbar_id = $id;
            $arbar->save();
            $dataArbar->increment('joined_player');
            return redirect()->back()->with('alert', 'Berhasil Diambil');
        }
    }
}
