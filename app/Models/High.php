<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class High extends Model
{
    protected $fillable = ['image', 'name', 'place', 'bed', 'price'];
}
