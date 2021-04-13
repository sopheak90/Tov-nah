<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HBookingModel extends Model
{
    use HasFactory;
    protected $table = 'booking_hotel';
    protected $fillable = ['hotelId', 'hotelName', 'name', 'phonenumber', 'email', 'checkin', 'checkout', 'more'];
}
