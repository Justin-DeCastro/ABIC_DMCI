<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'country',
        'province',
        'town_city',
        'property_inquired',
        'message',
    ];
}
