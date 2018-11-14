<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class RefundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('payment_historys');
        Schema::dropIfExists('payment_types');

        Schema::create('payment_historys',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('request_nominal')->nullable();
            $table->integer('payment_type_id');
            $table->enum('status', array('Pending','Sedang di Proses','Sudah di Proses','Gagal'));
            $table->string('image_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('payment_types',function(Blueprint $table){
            $table->increments('id');
            $table->enum('name', array('Tarik Dana','Setor Dana','Undian'));
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('payment_types')->insert([
            'name' => 'Tarik Dana'
        ]);
        DB::table('payment_types')->insert([
            'name' => 'Setor Dana'
        ]);
        DB::table('payment_types')->insert([
            'name' => 'Undian'
        ]);
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
