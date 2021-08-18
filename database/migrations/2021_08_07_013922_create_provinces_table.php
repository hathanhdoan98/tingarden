<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('provinces')) {
            Schema::create('provinces', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('search')->nullable();
                $table->string('alias');
                $table->string('province_id')->nullable();
                $table->string('province_code')->nullable();
                $table->string('code')->nullable();
                $table->string('status')->default('active');
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
        Schema::dropIfExists('provinces');
    }
}
