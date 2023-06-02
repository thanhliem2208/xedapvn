<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('table_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent');
            $table->foreign('id_parent')->references('id')->on('table_product');
            $table->string('image', 255)->nullable();
            $table->string('hash', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('status');
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
        Schema::dropIfExists('table_galleries');
    }
}
