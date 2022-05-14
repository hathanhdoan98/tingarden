<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('settings')) {
            Schema::create('settings', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->string('key')->primary();
                $table->string('value')->nullable();
                $table->string('note')->nullable();
                $table->tinyInteger('type')->default(0);
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
        Schema::dropIfExists('settings');
    }
}
