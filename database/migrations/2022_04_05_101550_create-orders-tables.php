<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
           // $table->id();

            $table->string('ref_Order');
            $table->primary('ref_Order');
            $table->date('dateOrder');
            $table->string('paymentWay');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('reduction');
            $table->integer('VAT');
            $table->integer('amountHT');
            $table->integer('amountTTC');

            $table->bigInteger('client_id')->unsigned()->index();
            $table->foreign('client_id')
                   ->references('id')
                   ->on('clients')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
                   
          
      
                   
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
