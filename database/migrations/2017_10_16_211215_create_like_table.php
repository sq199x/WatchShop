<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_like', function (Blueprint $table) {
            $table->increments('like_id');
            $table->integer('like_pro_id')->unsigned();
            $table->integer('like_count')->default(0);
            $table->timestamps();

            $table->foreign('like_pro_id')->references('pro_id')->on('tbl_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_like');
    }
}
