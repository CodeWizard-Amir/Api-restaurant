<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        //
    }
    public function get_orders($order_id)
    {
        $order = Order::where("order_id", $order_id)->firstOrFail();
        echo $order;
        echo"<br />";
        echo $order->customer()->first()->name;
        echo " - ";
        echo $order->customer()->first()->family;
        echo"<br />";

        $order_details = $order->details()->get();

        foreach($order_details as $item)
        {
            echo $item->food()->first()->name;
            echo"<br />";
            echo $item->food()->first()->price;
            echo"<br />";
            echo $item->quantity;
            echo"<br />";
        }
    }
    public function create()
    {
        $order = new Order;
        $order->create([
            "order_id" => Str::random(16),
            "user_id" => "JI95lo6Deoua6Ohv",
            "total_price" => 0,
            "status" => "not_payed",
        ]);
        return "Order has created!";
    }
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
