<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent');
            $table->string('name', 255);
            $table->string('desc', 255)->nullable();
            $table->mediumText('content')->nullable();
            $table->string('slug', 255);
            $table->string('image', 255);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_product_categories');
    }
}
