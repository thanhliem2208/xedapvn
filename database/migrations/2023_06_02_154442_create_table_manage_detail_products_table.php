<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableManageDetailProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('table_manage_detail_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_manage')->unique();
            $table->foreign('id_manage')->references('id')->on('table_manage_product');
            $table->string('name', 255);
            $table->integer('quantity');
            $table->double('price');
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
        Schema::dropIfExists('table_manage_detail_products');
    }
}
