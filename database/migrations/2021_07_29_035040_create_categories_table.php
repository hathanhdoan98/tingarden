<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('categories')) {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alias_id')->unsigned();
            $table->integer('meta_seo_id')->unsigned();
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('index')->nullable()->default(1);
            $table->string('description')->nullable();
            $table->string('search');
            $table->string('status');
            $table->integer('create_at')->default(time());
            $table->integer('update_at')->default(time());
            $table->timestamps();

            $table->foreign('alias_id')->references('id')->on('alias');
            $table->foreign('meta_seo_id')->references('id')->on('meta_seos');
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
        Schema::dropIfExists('categories');
    }
}
