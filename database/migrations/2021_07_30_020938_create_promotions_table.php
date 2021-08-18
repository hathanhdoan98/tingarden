<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('promotions')) {
            Schema::create('promotions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('code');
                $table->string('description')->nullable();
                $table->enum('type',['percent','money']); // percent / money
                $table->integer('begin')->nullable();
                $table->integer('end')->nullable();
                $table->integer('value');
                $table->string('search');
                $table->string('status');
                $table->integer('create_at')->default(time());
                $table->integer('update_at')->default(time());
                $table->timestamps();
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
        Schema::dropIfExists('promotions');
    }
}
