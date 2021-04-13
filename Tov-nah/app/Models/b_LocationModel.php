<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class b_LocationModel extends Model
{
    use HasFactory;
    protected $table = 'location';
    protected $fillable = ['id' ,'name', 'khmerprice', 'foriegnprice', 'estimate', 'description', 'image'];

}
