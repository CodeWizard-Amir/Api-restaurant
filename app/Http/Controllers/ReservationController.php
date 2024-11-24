<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;    

class ReservationController extends Controller
{
    public function create()
    {
        $reservation = new Reservation;
        $reservation->create([
            "user_id" => "RLdS1thW19u9fqwn",
            "reservation_date_time" => "16/4/1402/003htn",
            "number_of_people" => 12,
            "status" => "payed"
        ]);
        return "nice";
    }
    public function get_user_reservations($user_id)
    {
        $reservation = Reservation::where("user_id", $user_id)->first();
        if(!$reservation)
        {
            return response()->json(["message" => "هیچ رزروی برای این کاربر یافت نشد!"],404);
        }
        return response()->json(["data" => $reservation],200);
    }
}
