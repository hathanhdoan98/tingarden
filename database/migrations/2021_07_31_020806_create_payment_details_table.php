<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('payment_details')) {
            Schema::create('payment_details', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('order_id')->unsigned();
                $table->integer('payment_method_id')->unsigned();
                $table->integer('paid');
                $table->tinyInteger('status')->default(1);
                $table->timestamps();

                $table->foreign('order_id')->references('id')->on('orders');
                $table->foreign('payment_method_id')->references('id')->on('payment_methods');
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
        Schema::dropIfExists('payment_details');
    }
}
