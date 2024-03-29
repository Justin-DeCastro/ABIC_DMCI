<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alder extends Model
{
    protected $fillable = ['image', 'name','price', 'description', 'status',  'units', 'location'];
}

// The rest of your code...
