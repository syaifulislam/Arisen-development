<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRoomPaymentHistory extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id','room_id','period_roll','status'];
}
