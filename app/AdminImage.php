<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminImage extends Model
{
    protected $fillable = ['user_id','image_path','created_at','updated_at'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
