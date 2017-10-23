<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('pro_id');
            $table->string('pro_name');
            $table->string('pro_alias');
            $table->integer('pro_cat_id')->unsigned();;
            $table->integer('pro_value');
            $table->integer('pro_sale_id');
            $table->integer('pro_num');
            $table->integer('pro_img');
            $table->integer('pro_glass_id');
            $table->integer('pro_material_id');
            $table->integer('pro_size_id');
            $table->text('pro_info_other');
            $table->timestamps();

            $table->foreign('pro_cat_id')->references('cat_id')->on('tbl_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_products');
    }
}
