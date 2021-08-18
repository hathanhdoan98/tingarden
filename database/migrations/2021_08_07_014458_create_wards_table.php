<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('wards')) {
            Schema::create('wards', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('district_id')->unsigned();
                $table->string('name');
                $table->string('search')->nullable();
                $table->string('alias');
                $table->string('ward_id')->nullable();
                $table->string('ward_code')->nullable();
                $table->string('code')->nullable();
                $table->string('status')->default('active');
                $table->integer('create_at')->default(time());
                $table->integer('update_at')->default(time());
                $table->timestamps();

                $table->foreign('district_id')->references('id')->on('districts');
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
        Schema::dropIfExists('wards');
    }
}
