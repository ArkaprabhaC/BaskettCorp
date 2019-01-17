<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->string('itemname');
            $table->string('itemprice');
            
            $table->integer('custID')->unsigned();
            $table->foreign('custID')->references('id')->on('customers');

            $table->integer('tokenID')->unsigned();
            $table->foreign('tokenID')->references('id')->on('tokens');

            $table->string('quantity');

            $table->integer('productID')->unsigned();
            $table->foreign('productID')->references('id')->on('products');

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
        Schema::dropIfExists('orders');
    }
}
