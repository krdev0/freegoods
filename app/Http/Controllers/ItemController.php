<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    //Show all listings
    public function index()
    {
        return view('items.index', [
            'items' => Item::latest()->filter(request(['category']))->get(),
        ]);
    }

    //Show single listing
    public function show(Item $item)
    {
        return view('items.show', [
            'item' => $item
        ]);
    }
}
