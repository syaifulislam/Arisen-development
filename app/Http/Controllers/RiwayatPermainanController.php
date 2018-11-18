<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatPermainanController extends Controller
{
    public function index(){
        return view('riwayat-permainan');
    }
}
