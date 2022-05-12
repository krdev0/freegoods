<?php

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// All listings
Route::get('/', function () {
    return view('items', [
        'heading' => 'Latest Items',
        'items' => Item::all(),
    ]);
});

//Single listing
Route::get('/item/{item}', function (Item $item) {
    return view('item', ['item' => $item]);
});
