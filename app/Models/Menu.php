<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'name',
        'description',
    ];
    public function details() 
    {
        return $this->hasMany(Food::class,"menu_id","menu_id");
    }
}
