<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Arbar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('arbars');
        Schema::dropIfExists('arbar_details');

        Schema::create('arbars',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('sponsor');
            $table->string('sponsor_address');
            $table->string('sponsor_email');
            $table->string('contact_sponsor');
            $table->integer('total_player');
            $table->integer('joined_player')->default(0);
            $table->integer('coupon');
            $table->text('promo_image_path');
            $table->text('coupon_image_path');
            $table->integer('generate_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('arbar_details',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('arbar_id');
            $table->integer('room_id');
            $table->integer('state')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
