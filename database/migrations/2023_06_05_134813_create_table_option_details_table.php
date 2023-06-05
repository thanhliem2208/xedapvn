<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOptionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('table_option_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unique();
            $table->foreign('id_user')->references('id')->on('table_user');
            $table->integer('id_option')->unique();
            $table->foreign('id_option')->references('id')->on('table_option');
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
        Schema::dropIfExists('table_option_details');
    }
}
