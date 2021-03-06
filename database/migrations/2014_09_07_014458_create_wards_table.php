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
                $table->integer('district_code');
                $table->string('name');
                $table->string('search')->nullable();
                $table->string('alias');
                $table->string('ward_id')->nullable();
                $table->string('ward_code')->nullable();
                $table->string('code')->nullable();
                $table->tinyInteger('status')->default(1);
                $table->timestamps();

                $table->foreign('district_code')->references('district_code')->on('districts');
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
