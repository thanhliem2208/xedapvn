<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('table_order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_order')->unique();
            $table->foreign('id_order')->references('id')->on('table_order');
            $table->integer('id_product')->unique();
            $table->integer('quantity');
            $table->string('name', 255);
            $table->string('code_product', 255);
            $table->double('price');
            $table->double('price_sale');
            $table->string('color', 255);
            $table->string('size', 255);
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
        Schema::dropIfExists('table_order_details');
    }
}
