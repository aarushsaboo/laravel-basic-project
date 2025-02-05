<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show($id): View
{
    $user = User::findOrFail($id);
    // dd($user); // The original version was stopping at dd($user) and showing us the user data dump, but never actually trying to load the view. 
    try {
        return view('user.profile', ['user' => $user]);
        // laravel interprets 'user.profile' as 'resources/views/user/profile.blade.php'
    } catch (\Exception $e) {
        dd('View error: ' . $e->getMessage());
    }
}
}