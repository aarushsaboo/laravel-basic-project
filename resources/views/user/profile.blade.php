@extends('layouts.app')
<!-- The line @ext2ends('layouts.app') means this view is extending a layout file. Laravel will look for resources/views/layouts/app.blade.php. -->

@section('title', 'User Profile')

@section('content')
    <h1>User Profile</h1>
    <div>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <!-- Your View Expects a $user Object -->
    </div>
@endsection

<!-- Since profile.blade.php defines @sectio3n('content'), Laravel will inject this inside @y3ield('content') in your app.blade.php. -->