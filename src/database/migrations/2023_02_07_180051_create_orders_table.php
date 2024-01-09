<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->double('total_quantity')->unsigned();
            $table->integer('total_price')->unsigned();
            $table->string('note', 255)->nullable();
            $table->string('phone', 20);
            $table->string('address', 255);
            $table->string('name', 255);
            $table->string('email', 255);
            $table->bigInteger('payment_method')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_method')->references('id')->on('payment_methods');
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
};
