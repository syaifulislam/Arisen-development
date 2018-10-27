<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends \Cartalyst\Sentinel\Users\EloquentUser
{
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = ['first_name','last_name', 'username','email','last_login','birth_date','gender','is_verif','password','role_user'];
    protected $hidden = [
        'password',
    ];
    protected $loginNames = ['username'];
}
