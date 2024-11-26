<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("users" , [UserController::class , "index"]);
Route::get("user/{id}" , [UserController::class , "getUser"]);
Route::get("createUser" , [UserController::class , "create"]);
// MenuController ======================================================================
Route::get("/menu/create" , [MenuController::class, "create"]);
Route::get("/menu/{menu_id}" , [MenuController::class, "show_menu"]);
Route::get("/menus" , [MenuController::class, "get_all_menu"]);
// FoodController ======================================================================
Route::get("/food/create" , [FoodController::class, "create"]);
// Orders=================================================================================
Route::get("order/create", [OrderController::class , "create"]);
Route::middleware("Authenticator")->get("order/{order_id}", [OrderController::class , "get_orders"]);
Route::get("order_detail/create", [OrderDetailController::class , "create"]);
// ============================================================================================
Route::get("/create/reservation", [ReservationController:: class , "create"]);
Route::get("/reservation/{user_id}", [ReservationController:: class , "get_user_reservations"]);
// ///////////////////////////////////////////////////////// // // // // // // //////////////////////////////////////////
Route::get("login" , [Logincontroller::class, "login"]);



