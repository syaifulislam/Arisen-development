<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArbarDetail extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id','arbar_id','room_id','state'];
}
