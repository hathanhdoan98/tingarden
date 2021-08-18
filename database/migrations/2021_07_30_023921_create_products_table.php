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
                $table->integer('alias_id')->unsigned();
                $table->integer('meta_seo_id')->unsigned();
                $table->integer('category_id')->unsigned()->nullable();
                $table->string('name');
                $table->string('code')->nullable();
                $table->string('image')->nullable();
                $table->string('image1')->nullable();
                $table->string('image2')->nullable();
                $table->string('image3')->nullable();
                $table->integer('index')->nullable()->default(1);
                $table->string('short_description')->nullable();
                $table->longText('description')->nullable();
                $table->string('search');
                $table->integer('price')->default(0);
                $table->integer('sale_off_price')->default(0);
                $table->integer('rate')->default(0);
                $table->integer('total_rate')->default(0);
                $table->string('status');
                $table->integer('create_at')->default(time());
                $table->integer('update_at')->default(time());
                $table->timestamps();

                $table->foreign('alias_id')->references('id')->on('alias');
                $table->foreign('meta_seo_id')->references('id')->on('meta_seos');
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
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
