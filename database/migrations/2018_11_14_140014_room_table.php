<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('rooms');

        Schema::create('rooms',function(Blueprint $table){
            $table->increments('id');
            $table->string('room_name');
            $table->integer('price_per_player');
            $table->integer('total_player');
            $table->integer('total_player_join');
            $table->string('password')->nullable();
            $table->string('created_by');
            $table->string('generate_id');
            $table->enum('period',array('Mingguan','Bulanan','Tahunan'));
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
