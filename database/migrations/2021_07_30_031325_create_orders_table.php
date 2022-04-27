<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('customer_id')->unsigned()->nullable();
                $table->integer('promotion_id')->unsigned()->nullable();
                $table->integer('user_id')->unsigned()->nullable();
                $table->string('code');
                $table->string('note')->nullable();
                $table->integer('total_price');
                $table->integer('discount_price')->default(0);
                $table->integer('payment_total_price');
                $table->integer('sub_charge')->default(0);
                $table->tinyInteger('status')->default(1);
                $table->timestamps();

                $table->foreign('customer_id')->references('id')->on('customers');
                $table->foreign('promotion_id')->references('id')->on('promotions');
                $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('orders');
    }
}
