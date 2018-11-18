<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_name','price_per_player','total_player','password','period','created_by','generate_id','total_player_join','period_start_date','created_at','updated_at','period_status'];
}
