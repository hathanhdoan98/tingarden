<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('alias_id')->unsigned();
                $table->integer('meta_seo_id')->unsigned();
                $table->string('name');
                $table->string('image')->nullable();
                $table->string('short_content')->nullable()->default('');
                $table->longText('content');
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
        Schema::dropIfExists('posts');
    }
}
