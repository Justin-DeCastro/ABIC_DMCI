<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leisure extends Model
{
    protected $fillable = ['image', 'name', 'place', 'bed', 'price'];
}
