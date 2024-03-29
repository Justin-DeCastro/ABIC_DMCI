<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendProperty extends Model
{
    use HasFactory;


    protected $fillable = ['image', 'name', 'email', 'description', 'status'];

    protected $casts = [
        'image' => 'json',
    ];
}
