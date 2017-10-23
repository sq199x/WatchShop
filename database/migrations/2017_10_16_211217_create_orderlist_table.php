<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_list', function (Blueprint $table) {
            $table->increments('orlst_id');
            $table->integer('orlst_order_id')->unsigned();
            $table->integer('orlst_pro_id')->unsigned();
            $table->integer('orlst_active');
            $table->timestamps();

            $table->foreign('orlst_order_id')->references('ord_id')->on('tbl_order')->onDelete('cascade');
            $table->foreign('orlst_pro_id')->references('pro_id')->on('tbl_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_order_list');
    }
}
