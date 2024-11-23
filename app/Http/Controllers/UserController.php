<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::get();
        if($users) return response()->json(["data" => $users]);
        return response()->json(["message" => "هیچ کاربری یافت نشد!"],404);
    }
    public function getUser($id)        
    {
        $user = User::find($id);
        if($user) return response()->json(["data" => $user]);
        return response()->json(["message" => "کاربری پیدا نشد !"]);
    }
    public function create(): string
    {
        $user = new User;
        $user->create([
            "name" => "zahra",
            "family" => "sabour",
            "user_id" => Str::random(16),
            "phone" => "09305871500",
            "sex" => "fmale",
            "email" => "sabour@gmail.com",
            "password" => Str::random(8),
        ]);
        return "the user has been created !";
    }
}
