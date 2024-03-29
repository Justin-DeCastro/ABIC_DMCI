<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celandine extends Model
{
    protected $fillable = ['image', 'name', 'price', 'status', 'development', 'units', 'location', 'general', 'building', 'link'];

}
