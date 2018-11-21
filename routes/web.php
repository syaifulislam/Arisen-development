<?php

use App\Http\Middleware\SentinelCheck;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('riwayat-keuangan-admin',function(){
    return view('riwayat-keuangan-admin');
});

Route::get('setor-dana-admin',function(){
    return view('setor-dana-admin');
});

Route::get('tarik-dana-admin',function(){
    return view('tarik-dana-admin');
});

Route::get('aktifasi-akun-admin',function(){
    return view('aktifasi-akun-admin');
});

Route::get('notifikasi-admin',function(){
    return view('notifikasi-admin');
});

Route::get('home-admin',function(){
    return view('home-admin');
});

Route::get('/', function(){
    if(Sentinel::check())
        return view('index-login');

    return view('index');
});

Route::get('arbar','ArbarController@index');

Route::get('bantuan',function(){
    return view('bantuan');
});

Route::get('tentang-kami',function(){
    return view('tentang-kami');
});

Route::prefix('auth')->group(function(){
    Route::get('/login',function(){
        if(Sentinel::check())
            return redirect('home-page');
        return view('login-page');
    });
    Route::post('/login','UserController@authenticate');

    Route::get('/register',function(){
        return view('register-page');
    });
    Route::post('/register','UserController@registerUsers');

    Route::get('/expired',function(){
        return view('expired');
    });

    Route::get('/forgot-password',function(){
        return view('forgot-password-page');
    });
    Route::post('/forgot-password','UserController@forgotPassword');

    Route::post('/change-password','UserController@actionChangePassword');

    Route::get('/verifEmail/{callback}','UserController@emailVerification');
    Route::get('/forgot-password-verification/{callback}','UserController@changePassword');
    Route::get('/logout','UserController@logout');
});

Route::group(['middleware'=>SentinelCheck::class],function(){
    Route::get('/home-page','HomeController@index');
    Route::get('/my-account','AccountController@index');
    Route::get('/my-room','RoomController@index');
    Route::get('/forum','ForumController@index');
    Route::post('/verification','AccountController@verification');
    Route::get('/create-room','RoomController@create');
    Route::get('/tarik','SetorController@index');
    Route::get('/setor','SetorController@setorIndex');
    Route::post('/setor','SetorController@setorCreate');
    Route::post('/create-room','RoomController@createRoom');
    Route::post('/request-money','SetorController@requestMoney');
    Route::get('/riwayat-keuangan','SetorController@history');
    Route::get('/riwayat-permainan','RiwayatPermainanController@index');
    Route::get('/room/{id}','RoomController@room');
    Route::post('/roomComment/{id}','RoomCommentController@create');
    Route::get('/roomComment/{id}','RoomCommentController@index');
    Route::get('/roomComments/{id}','RoomCommentController@update');
    Route::put('/checkRoom/{id}','RoomController@checkPassword');
});

