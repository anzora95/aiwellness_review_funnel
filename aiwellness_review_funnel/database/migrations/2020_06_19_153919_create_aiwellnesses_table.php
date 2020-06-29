<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAiwellnessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aiwellnesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Product');
            $table->string('OrderNumber');
            $table->string('Rating');
            $table->string('Review');
            $table->string('Email');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Shipping1');
            $table->string('Shipping2');
            $table->string('City');
            $table->string('St');
            $table->string('Zip');
            $table->integer('Status');
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
        Schema::dropIfExists('aiwellnesses');
    }
}
