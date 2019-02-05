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
            $table->timestamps();
            $table->string('chargeId');
            $table->string('unlockBaseId');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('type')->default('customer');
            $table->string('country');
            $table->string('network');
            $table->string('tool');
            $table->integer('credits');
            $table->integer('price');
            $table->string('IMEI');
            $table->string('model');
            $table->string('status')->default('Pending');
            $table->string('codes')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

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
