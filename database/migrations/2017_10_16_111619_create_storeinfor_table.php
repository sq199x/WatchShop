<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreinforTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_store_infor', function (Blueprint $table) {
            $table->increments('info_id');
            $table->string('info_name');
            $table->integer('info_phone');
            $table->string('info_address');
            $table->integer('info_fax');
            $table->string('info_mail');
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
        Schema::dropIfExists('tbl_store_infor');
    }
}
