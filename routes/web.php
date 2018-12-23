<?php

use App\Http\Middleware\SentinelCheck;
use App\Http\Middleware\SentinelAdmin;

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

Route::get('/admin',function(){
    return redirect('auth/login');
});


Route::get('detail-saldo',function(){
    return view('detail-saldo');
});

// Route::get('ruangan-arisan',function(){
//     return view('ruangan-arisan');
// });

Route::get('ruangan-arisan-undian',function(){
    return view('ruangan-arisan-undian');
});

Route::get('ruangan-arisan-undian-dapat',function(){
    return view('ruangan-arisan-undian-dapat');
});

// Route::get('add-ruangan',function(){
//     return view('add-ruangan');
// });

Route::get('/', function(){
    if (Sentinel::check()){
        if (Sentinel::getUser()->role_user == 'user') {
            return view('index-login');
        }else if(Sentinel::getUser()->role_user == 'admin'){
            return redirect('home-admin');
        }
    }
    return view('index');
    // return view('home-index');
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
    Route::get('notification-user','NotificationController@index');
        // return view('notification-user');
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
    Route::get('/ruangan-arisan/{id}','RoomController@room');
    Route::post('/roomComment/{id}','RoomCommentController@create');
    Route::get('/roomComment/{id}','RoomCommentController@index');
    Route::get('/roomComments/{id}','RoomCommentController@update');
    Route::put('/checkRoom/{id}','RoomController@checkPassword');
    Route::get('/add-room/{id}/{room_id}','RoomController@addRoom');
    Route::post('/ambil-arbar/{id}', 'ArbarController@ambilArbar');
    Route::get('/undi-arisan/{id}','RoomController@undian');
});

Route::group(['middleware'=>SentinelAdmin::class],function(){
    Route::get('home-admin','AdminController@home');
    Route::get('laporan-keuangan','AdminController@keuangan');
    Route::get('riwayat-keuangan-admin','AdminController@keuangan');
    Route::get('arbar-admin', 'AdminController@arbarIndex');
    Route::get('setor-dana-admin', 'AdminController@setor');
    Route::get('tarik-dana-admin','AdminController@tarik');
    Route::get('aktivasi-akun-admin','AdminController@activate');
    Route::get('activate/{user_id}/{slug}','AdminController@actionActivate');
    Route::get('setor/{id}/{slug}','AdminController@actionSetor');
    Route::post('tarik/{id}','AdminController@actionTarik');
    Route::post('addAdmin','AdminController@addAdmin');
    Route::post('changeAdmin/{id}','AdminController@changeAdmin');
    Route::post('download-xls', 'AdminController@download');
    Route::get('add-admin','AdminController@superAdmin');
    Route::get('denied-user',function(){
        return view('denied-user');
    });
    Route::post('add-arbar', 'AdminController@arbarStore');
    Route::get('admin-delete-arbar/{id}', 'AdminController@arbarDelete');
});
Route::get('coming-soon',function(){
    return view('coming-soon');
});
Route::get('admin-get-user/{id}','AdminController@getUserActivate');
Route::get('admin-get-setor/{id}','AdminController@getUserSetor');
Route::get('admin-get-tarik/{id}','AdminController@getUserTarik');
Route::get('admin-get-keuangan/{id}','AdminController@getUserKeuangan');
Route::get('admin-get-data/{id}', 'AdminController@getUserAdmin');
Route::get('admin-get-arbar/{id}', 'AdminController@getArbar');
Route::get('arbar-detail/{id}', 'ArbarController@getArbar');
Route::post('arbar-admin-update/{id}', 'AdminController@updateArbar');

Route::get('admin-super-admin',function(){
    return view('admin-super-admin');
});