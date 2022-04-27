<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('category_id')->unsigned()->nullable();
                $table->string('name');
                $table->string('code')->nullable();
                $table->integer('index')->nullable()->default(1);
                $table->string('short_description')->nullable();
                $table->longText('description')->nullable();
                $table->string('search');
                $table->integer('price')->default(0);
                $table->integer('sale_off_price')->default(0);
                $table->integer('rate')->default(0);
                $table->integer('total_rate')->default(0);
                $table->tinyInteger('status')->default(1);
                $table->timestamps();

                $table->foreign('category_id')->references('id')->on('categories');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
