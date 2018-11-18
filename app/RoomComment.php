<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomComment extends Model
{
    protected $fillable = ['user_id','room_id','comment','created_at','updated_at','flag_view'];

    public function user(){
        return $this->hasOne(Users::class,'id','user_id');
    }
}
