<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RestaurantModel extends Model
{
    use HasFactory;
    protected $table = 'restaurant';
    protected $fillable = ['id' ,'name', 'location', 'amount_of_people', 'price', 'description', 'type', 'image'];

}
