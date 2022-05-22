<?php

use App\Http\Controllers\ItemController;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// All listings
Route::get('/', [ItemController::class, 'index']);

//Show new item form
Route::get('/item/create', [ItemController::class, 'create']);

// Store new item data
Route::post('/item', [ItemController::class, 'store']);

//Single listing
Route::get('/item/{item}', [ItemController::class, 'show']);
