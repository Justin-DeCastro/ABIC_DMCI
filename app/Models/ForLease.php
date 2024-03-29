<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForLease extends Model
{
    use HasFactory;

    protected $table = 'forlease';

    protected $fillable = ['image', 'price', 'status', 'units', 'location'];
}
