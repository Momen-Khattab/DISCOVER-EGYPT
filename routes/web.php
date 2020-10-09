<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about.php', function () {
    return view('about');
});

Route::get('/Amenities.php', function () {
    return view('Amenities');
});

Route::get('/booking.php', function () {
    return view('booking');
});

Route::get('/contact.php', function () {
    return view('contact');
});


Route::get('/index.php', function () {
    return view('index');
});

Route::get('/offers.php', function () {
    return view('offers');
});


Route::get('/profile.php', function () {
    return view('profile');
});


Route::get('/rest.php', function () {
    return view('rest');
});


Route::get('/rooms.php', function () {
    return view('rooms');
});
