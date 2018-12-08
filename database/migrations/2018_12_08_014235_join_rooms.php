<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JoinRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('join_rooms');
        Schema::dropIfExists('user_room_payment_histories');

        Schema::create('join_rooms',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('room_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('user_room_payment_histories',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('room_id');
            $table->integer('period_roll');
            $table->enum('status', array('Belum Bayar','Terbayar'))->default('Belum Bayar');
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
