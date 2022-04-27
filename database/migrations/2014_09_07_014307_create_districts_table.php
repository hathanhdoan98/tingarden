<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('districts')) {
            Schema::create('districts', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('province_id')->unsigned();
                $table->string('name');
                $table->string('search')->nullable();
                $table->string('alias');
                $table->string('district_id')->nullable();
                $table->string('district_code')->nullable();
                $table->string('code')->nullable();
                $table->tinyInteger('status')->default(1);
                $table->timestamps();

                $table->foreign('province_id')->references('id')->on('provinces');
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
        Schema::dropIfExists('districts');
    }
}
