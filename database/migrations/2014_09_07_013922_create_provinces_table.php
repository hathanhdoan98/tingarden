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
                $table->tinyInteger('status')->default(1);
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
