<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableManageProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('table_manage_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_product')->unique();
            $table->foreign('id_product')->references('id')->on('table_product');
            $table->string('name', 255);
            $table->string('code', 255)->nullable();
            $table->double('total_price');
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
        Schema::dropIfExists('table_manage_products');
    }
}
