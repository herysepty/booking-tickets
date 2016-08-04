<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payment extends Migration
{
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_number',50);
            $table->string('payment_name',50);
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
        Schema::drop('payment');
    }
}
