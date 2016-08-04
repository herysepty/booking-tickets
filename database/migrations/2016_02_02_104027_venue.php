<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Venue extends Migration
{
   public function up()
    {
        Schema::create('venue', function (Blueprint $table) {
            $table->increments('id');
            $table->string('venue_name',50);
            $table->string('venue_location',50);
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
        Schema::drop('venue');
    }
}
