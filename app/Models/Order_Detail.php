<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Food;
class Order_Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'food_id',
        'quantity',
    ];
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
    public function food()
    {
        return $this->hasMany(Food::class, "food_id" ,"food_id");
    }
}
