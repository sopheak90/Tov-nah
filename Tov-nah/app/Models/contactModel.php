<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    protected $table = 'contact';
    public $timestamps = ['id', 'name', 'email', 'message'];
}
