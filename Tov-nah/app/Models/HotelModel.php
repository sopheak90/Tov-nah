<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelModel extends Model
{
    use HasFactory;
    protected $table = 'hotel';
    protected $fillable = ['id' ,'name', 'night', 'price' , 'rating', 'location', 'type', 'description', 'image' , 'rating'];

}
