<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruducts', function (Blueprint $table) {
             //$table->id();
            $table->string('refProduct');
            $table->primary('refProduct');
            $table->string('name');
            $table->string('designation');
            $table->string('stock');
            $table->integer('unitPrice');
            $table->string('storageUnit');
            


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
        Schema::dropIfExists('pruducts');
    }
}
