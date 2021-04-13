<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_restaurant', function (Blueprint $table) {
            $table->id();
            $table->string('restaurantId');
            $table->string('restaurantName');
            $table->string('name');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('date');
            $table->string('time');
            $table->string('amount');
            $table->string('more');
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
        Schema::dropIfExists('booking_restaurant');
    }
}
