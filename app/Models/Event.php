<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'date','description'];
    public static function getLatestUpdate()
    {
        return self::select('name', 'date', 'description' )
        ->oldest('created_at')
        ->first();
    }
}
