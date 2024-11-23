<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{

    public function get_all_menu(): JsonResponse
     {
         $menus = Menu::get()->all();
         if(!$menus)
         {
            return response()->json(["message" => "منویی یافت نشد !"],404);
         }
         $all_menu = [];
        foreach($menus as $item)
        {
            $TempMenu = [];
            array_push($TempMenu , ["menu_name" => $item->name, "menu_items" => $item->details()->get()]);
            array_push($all_menu , $TempMenu);

        }
        return response()->json(["data" => $all_menu]);
     }
    public function show_menu($menu_id): JsonResponse
    {
        $menu = Menu::where("menu_id", $menu_id)->first();
        if(!$menu)
        {
           return response()->json(["message" => "منویی یافت نشد !"],404);
        }
        return response()->json(["data" => ["menu_name" => $menu->name, "menu_items" => $menu->details()->get()]]);
    }
}
