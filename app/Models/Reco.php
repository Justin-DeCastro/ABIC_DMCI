<?php

// app/Models/Reco.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reco extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'link','place', 'bed', 'price'];
    // public static function getLatestUpdate()
    // {
    //     return self::select('image', 'name', 'place', 'bed' , 'price')
    //     ->oldest('created_at')
    //     ->first();
    // }
}
