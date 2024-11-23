<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_Detail;
class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'user_id',
        'total_price',
        'status',
    ];
    public function customer()
    {
        return $this->belongsTo(User::class,"user_id" ,"user_id");
    }
    public function details()
    {
        return $this->hasMany(Order_Detail::class,"order_id","order_id");
    }
}
