<?php

use App\Http\Controllers\ItemController;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// All listings
Route::get('/', [ItemController::class, 'index']);

//Single listing
Route::get('/item/{item}', [ItemController::class, 'show']);
