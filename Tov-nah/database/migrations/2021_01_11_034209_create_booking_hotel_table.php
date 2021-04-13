<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_hotel', function (Blueprint $table) {
            $table->id();
            $table->string('hotelId');
            $table->string('hotelName');
            $table->string('name');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('checkin');
            $table->string('checkout');
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
        Schema::dropIfExists('booking_hotel');
    }
}
