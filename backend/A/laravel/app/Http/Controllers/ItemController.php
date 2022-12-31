<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $item = Item::first();
        $name = $item->name;
        $price = $item->price;

        return ["name" => $name, "price" => $price];
    }

    public function store(Request $request, Item $item)
    {
        $item->fill($request->all());
        $item->save();
        return ["message" => "success"];
    }
}
