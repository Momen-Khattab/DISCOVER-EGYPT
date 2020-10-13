<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
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

Route::get('/', 'HomeController@index');

Route::get('/rooms','RoomController@rooms');

Route::get('/restaurants', 'RestaurantsController@restaurants');

Route::get('/booking', 'BookingController@booking');

Route::get('/offers', 'OffersController@offers');


Route::get('/about', function () {
    return view('website.about');
});

Route::get('/amenities', function () {
    return view('website.Amenities');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/index', function () {
    return view('website.index');
});

Route::get('/profile', function () {
    return view('website.profile');
});