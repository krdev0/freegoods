<?php

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

// All listings
Route::get('/', [ItemController::class, 'index']);
//Show new item form
Route::get('/item/create', [ItemController::class, 'create']);
// Store new item data
Route::post('/item', [ItemController::class, 'store']);
//Single listing
Route::get('/item/{item}', [ItemController::class, 'show']);
//Edit item form
Route::get('item/{item}/edit', [ItemController::class, 'edit']);
//Update item
Route::put('item/{item}', [ItemController::class, 'update']);
//Delete item
Route::delete('item/{item}', [ItemController::class, 'destroy']);


//Show register form
Route::get('/register', [UserController::class, 'create']);
//Create new user
Route::post('/user', [UserController::class, 'store']);
//Log user out
Route::post('/logout', [UserController::class, 'logout']);
//Show login form
Route::get('/login', [UserController::class, 'login']);
