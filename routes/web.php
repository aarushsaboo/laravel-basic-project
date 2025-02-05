<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});



// Basic route with closure
Route::get('/greeting', function () {
    return 'Hello World';
});

// Route with controller
Route::get('/user/{id}', [UserController::class, 'show']);