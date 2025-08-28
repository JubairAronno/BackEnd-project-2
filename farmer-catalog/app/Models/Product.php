<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'item_name',
        'quantity', 
        'price_per_kg',
        'location'
    ];
}