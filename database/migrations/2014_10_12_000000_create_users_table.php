<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('status')->default('active');
                $table->integer('create_at')->default(time());
                $table->integer('update_at')->default(time());
                $table->string('role');
                $table->string('address')->nullable();
                $table->integer('province_id')->nullable()->unsigned();
                $table->integer('district_id')->nullable()->unsigned();
                $table->integer('ward_id')->nullable()->unsigned();
                $table->string('phone')->nullable();
                $table->string('forgot_password_token')->nullable();
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
