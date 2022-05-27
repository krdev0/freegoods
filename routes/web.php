<?php

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

// All items
Route::get('/', [ItemController::class, 'index']);
//Show new item form
Route::get('/item/create', [ItemController::class, 'create'])->middleware('auth');
// Store new item data
Route::post('/item', [ItemController::class, 'store'])->middleware('auth');
//Single item
Route::get('/item/{item}', [ItemController::class, 'show']);
//Edit item form
Route::get('item/{item}/edit', [ItemController::class, 'edit'])->middleware('auth');
//Update item
Route::put('item/{item}', [ItemController::class, 'update'])->middleware('auth');
//Delete item
Route::delete('item/{item}', [ItemController::class, 'destroy'])->middleware('auth');


//Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
//Create new user
Route::post('/user', [UserController::class, 'store']);
//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//Log in user
Route::post('/user/authenticate', [UserController::class, 'authenticate']);
//Manage profile
Route::get('/profile', [UserController::class, 'manage'])->middleware('auth');
