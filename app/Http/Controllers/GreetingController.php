<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function index()
    {
        $greetings = Greeting::all();
        return view('greetings', ['greetings' => $greetings]);
    }
}