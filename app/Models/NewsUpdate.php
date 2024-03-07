<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsUpdate extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name','link', 'description', 'date'];
public static function getLatestUpdate()
    {
        return self::select('name','link','image', 'description', 'date')
        ->oldest('created_at')
        ->first();
    }
}

