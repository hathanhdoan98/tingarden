<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropForeignKeyTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropForeign('customers_district_id_foreign');
            $table->dropForeign('customers_province_id_foreign');
            $table->dropForeign('customers_ward_id_foreign');

            $table->renameColumn('province_id','province_code');
            $table->renameColumn('district_id','district_code');
            $table->renameColumn('ward_id','ward_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('ward_id')->references('id')->on('wards');

            $table->renameColumn('province_code','province_id');
            $table->renameColumn('district_code','district_id');
            $table->renameColumn('ward_code','ward_id');
        });
       
    }
}
