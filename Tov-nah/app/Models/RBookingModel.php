<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RBookingModel extends Model
{
    use HasFactory;
    protected $table = 'booking_restaurant';
    protected $fillable = ['restaurantId', 'restaurantName', 'name', 'phonenumber', 'email', 'date', 'time', 'more'];
}