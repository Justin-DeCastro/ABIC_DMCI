<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForLeasing extends Model
{
    use HasFactory;
    protected $table = 'forleasings';

    protected $fillable = ['image', 'status', 'units', 'location'];
}
