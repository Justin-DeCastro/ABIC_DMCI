<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendProperty extends Model
{
    use HasFactory;

    protected $fillable = ['id_image', 'image', 'video', 'name', 'email', 'description', 'status'];

    protected $casts = [
        'image' => 'json',
        'video' => 'json',
    ];
}
