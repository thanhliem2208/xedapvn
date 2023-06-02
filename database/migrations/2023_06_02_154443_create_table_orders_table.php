<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('table_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unique();
            $table->foreign('id_user')->references('id')->on('table_user');
            $table->integer('id_payment')->unique();
            $table->foreign('id_payment')->references('id')->on('table_payment');
            $table->string('code', 255);
            $table->double('total_price');
            $table->integer('id_order_status')->unique();
            $table->foreign('id_order_status')->references('id')->on('table_order_status');
            $table->string('address', 255);
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
        Schema::dropIfExists('table_orders');
    }
}
