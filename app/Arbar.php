<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arbar extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','sponsor','sponsor_address','sponsor_email','contact_sponsor','total_player','joined_player','coupon','promo_image_path','coupon_image_path','generate_id'];
}
