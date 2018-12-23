<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserUndiArisan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user_arisans');
        // Schema::dropIfExists('arbar_details');

        Schema::create('user_arisans',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('room_id');
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::create('arbar_details',function(Blueprint $table){
        //     $table->increments('id');
        //     $table->integer('user_id');
        //     $table->integer('arbar_id');
        //     $table->integer('room_id');
        //     $table->integer('state')->default(0);
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
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
