<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',
        'location',
        'service',
        'budget',
        'current_website',
        'timeline',
        'source',
        'message',
        'status',
        'ip_address',
        'user_agent',
    ];
}
