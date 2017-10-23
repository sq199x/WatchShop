<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProimgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pro_img', function (Blueprint $table) {
            $table->increments('proimg_id');
            $table->integer('proimg_pro_id')->unsigned();
            $table->string('proimg_url');
            $table->timestamps();

            $table->foreign('proimg_pro_id')->references('pro_id')->on('tbl_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pro_img');
    }
}
