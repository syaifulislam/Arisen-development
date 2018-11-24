<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    protected $table = 'payment_historys';
    protected $fillable = ['user_id','request_nominal','payment_type_id','status','image_path','image_path_confirm','created_at','updated_at'];

    public function payment_type(){
        return $this->hasOne(PaymentType::class,'id','payment_type_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function user_detail(){
        return $this->hasOne(UserDetails::class,'user_id','user_id');
    }
}
