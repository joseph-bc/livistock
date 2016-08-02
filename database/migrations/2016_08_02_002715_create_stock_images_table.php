<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock_id')->unsigned()->index();
            $table->string('image');
            $table->string('watermark_image');
            $table->string('dimensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock_images');
    }
}
