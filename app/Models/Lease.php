<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $table = 'leases';

    protected $fillable = ['image', 'price', 'status', 'units', 'location'];
}
