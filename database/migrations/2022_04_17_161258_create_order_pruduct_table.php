<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPruductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pruduct', function (Blueprint $table) {
            $table->id();

            $table->string('order_ref_Order')->index();
            $table->foreign('order_ref_Order')
                   ->references('orders')
                   ->on('ref_Order')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');

            $table->string('pruduct_refProduct')->index();
            $table->foreign('pruduct_refProduct')
                          ->references('pruducts')
                          ->on('refProduct')
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
        Schema::dropIfExists('order_pruduct');
    }
}
