@extends('layouts.app')
<!-- The line @extends('layouts.app') means this view is extending a layout file.
Laravel will look for resources/views/layouts/app.blade.php. -->

@section('title', 'User Profile')

@section('content')
    <h1>User Profile</h1>
    <div>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <!-- Your View Expects a $user Object -->
    </div>
@endsection

<!-- Since profile.blade.php defines @section('content'), Laravel will inject this inside @yield('content') in your app.blade.php. -->