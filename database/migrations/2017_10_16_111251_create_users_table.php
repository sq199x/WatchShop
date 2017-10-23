<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->increments('usr_id');
            $table->string('usr_name');
            $table->string('usr_pwd');
            $table->string('usr_pwd_hash');
            $table->string('usr_subname');
            $table->string('usr_real_name');
            $table->string('usr_email');
            $table->integer('usr_tel');
            $table->date('usr_birth');
            $table->integer('usr_city_id');
            $table->string('usr_ava');
            $table->integer('usr_cmt_id');
            $table->integer('usr_like_id');
            $table->integer('usr_per_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
}
