<?php

use Illuminate\Support\Facades\Route;

// Route directing to landing page
Route::get('/', function () {
    return view('landing_page');
});

// Route directing to users feed
Route::get('/feed', function () {
    return view('users.user_feed');
});

// Route directing to users profile
Route::get('/profile', function () {
    return view('users.user_profile');
});