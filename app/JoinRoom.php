<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JoinRoom extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id','room_id'];

    public function room(){
        return $this->hasOne(Room::class,'id','room_id');
    }
}
