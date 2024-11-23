<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Order;
use App\Models\Comment_Suggestion;
use App\Models\Reservation;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'family',
        'password',
        'sex',
        'role',
        'phone',
        'email',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment_Suggestion::class);
    }
    public function reservation()
    {
        return $this->hasMany( Reservation::class);
    }
}
