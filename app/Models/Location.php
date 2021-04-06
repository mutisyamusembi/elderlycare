<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        
        'address_address',
        'address_latitude',
        'address_longitude',
    ];
}
