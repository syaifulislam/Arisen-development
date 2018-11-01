<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user_details');

        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->bigInteger('money')->nullable();
            $table->bigInteger('bank_account_number')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('bank_account_office')->nullable();
            $table->string('images_path')->nullable();
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
