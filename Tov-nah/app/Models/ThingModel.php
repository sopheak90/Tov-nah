<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThingModel extends Model
{
    use HasFactory;
    protected $table = 'thing_to_do';
    protected $fillable = ['id','name','description', 'image'];
    public $timestamps = false;

}


