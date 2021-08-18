<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('customers')) {
            Schema::create('customers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('address')->nullable();
                $table->integer('province_id')->nullable()->unsigned();
                $table->integer('district_id')->nullable()->unsigned();
                $table->integer('ward_id')->nullable()->unsigned();
                $table->string('status');
                $table->integer('create_at')->default(time());
                $table->integer('update_at')->default(time());
                $table->timestamps();

                $table->foreign('province_id')->references('id')->on('provinces');
                $table->foreign('district_id')->references('id')->on('districts');
                $table->foreign('ward_id')->references('id')->on('wards');
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
        Schema::dropIfExists('customers');
    }
}
