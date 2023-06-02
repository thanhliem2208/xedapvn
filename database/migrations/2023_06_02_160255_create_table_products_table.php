<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('table_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category')->unique();
            $table->foreign('id_category')->references('id')->on('table_product_category');
            $table->integer('id_color')->unique();
            $table->foreign('id_color')->references('id')->on('table_color');
            $table->integer('id_size')->unique();
            $table->foreign('id_size')->references('id')->on('table_size');
            $table->string('image', 255)->nullable();
            $table->string('slug', 255);
            $table->string('name', 255);
            $table->mediumText('desc')->nullable();
            $table->mediumText('content')->nullable();
            $table->string('code', 255)->nullable();
            $table->double('price');
            $table->double('price_sale');
            $table->integer('discount');
            $table->integer('quantity');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_products');
    }
}
