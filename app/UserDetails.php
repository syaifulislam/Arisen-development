<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class UserDetails extends Model
{
    use SoftDeletes;

    protected $table = 'user_details';
    protected $fillable = ['user_id','money', 'bank_account_number','bank_account_name','images_path','bank_account_office'];
    
}
