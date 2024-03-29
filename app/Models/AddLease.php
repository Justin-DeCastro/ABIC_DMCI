<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddLease extends Model
{
    use HasFactory;

    protected $fillable = ['image','name', 'price', 'description','status', 'units', 'location'];
}
