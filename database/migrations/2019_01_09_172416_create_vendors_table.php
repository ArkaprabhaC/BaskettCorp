<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendorname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');

            $table->string('avatar')->default('default.jpg');
            $table->string('storename');
            $table->string('state');
            $table->string('city');
            $table->integer('pincode');
            $table->string('address');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendors');
    }
}
