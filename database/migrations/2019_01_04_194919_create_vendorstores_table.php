<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorstoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendorstores', function (Blueprint $table) {
             $table->increments('storeID');
            $table->string('storename');
            $table->string('storeaddr');
            $table->string('corporateaddr');
            $table->string('pincode');

            $table->integer('vendorID')->unsigned();
            $table->foreign('vendorID')->references('vendorID')->on('vendors');
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
        Schema::dropIfExists('vendorstores');
    }
}
