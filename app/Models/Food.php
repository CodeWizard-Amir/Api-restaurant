<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_id',
        'menu_id',
        'name',
        'description',
        'price',
        'image_url',
    ];
}
