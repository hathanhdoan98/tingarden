<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('payment_methods')) {
            Schema::create('payment_methods', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('search');
                $table->string('description')->nullable();
                $table->integer('index')->nullable()->default(1);
                $table->string('image')->nullable();
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
        Schema::dropIfExists('payment_methods');
    }
}
