<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['image', 'name', 'description', 'date'];
    public static function getLatestUpdate()
    {
        return self::select( 'image','name', 'description', 'date')
        ->oldest('created_at')
        ->first();
    }
}
