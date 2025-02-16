<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GreetingController;
use App\Models\Greeting;


Route::get('/', function () {
    return view('welcome');
});



// Basic route with closure
Route::get('/greeting', [GreetingController::class, 'index']);

// Route with controller
Route::get('/user/{id}', [UserController::class, 'show']);