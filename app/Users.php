<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sentinel;
use App\UserDetails;

class Users extends \Cartalyst\Sentinel\Users\EloquentUser
{
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = ['first_name','last_name', 'username','email','last_login','birth_date','gender','is_verif','password','role_user'];
    protected $hidden = [
        'password',
    ];
    protected $loginNames = ['username'];

    public function user_details(){
        return $this->hasOne('App\UserDetails','user_id');
    }

    public function getMoneyAttribute(){
        return UserDetails::where('user_id',Sentinel::getUser()->id)->first() ? UserDetails::where('user_id',Sentinel::getUser()->id)->first()->money : 0;
    }
}
