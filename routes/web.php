<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Models\Room;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/rooms','RoomController@rooms')->name('visitorRooms');

Route::get('/contact','ContactController@contact')->name('contact');

Route::get('/restaurants', 'FoodController@restaurants')->name('visitorRestaurants');

Route::get('/booking', 'FlightController@booking')->name('visitorBooking');

Route::get('/offers', 'TripController@offers')->name('visitorOffers');;


Route::get('/about', function () {
    return view('website.about');
});


Route::get('/contact', function () {
    return view('website.contact');
});



Route::get('/index', function () {
    return view('website.index');
});


Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', 'FrontController@profile');
    Route::post('/profileSave', 'FrontController@profileSave');

    Route::post('/reserve-food', 'FrontController@reserveFood');
    Route::post('/reserve-room', 'FrontController@reserveRoom');
    Route::post('/reserve-trip', 'FrontController@reserveTrip');
    Route::post('/reserve-booking', 'FrontController@reserveflight');
});

Route::get('email-view', function(){
    return view('emails.food-reservation');
});


Route::post('/contactSave', 'FrontController@contactSave');

/**
 * Admin routes
 */
Route::group(['prefix' => '/admin', 'middleware' => 'admin.guest'], function(){
    Route::get('/login','AdminLoginController@loginView')->name('adminLoginView');
    Route::post('/login','AdminLoginController@login')->name('adminLogin');
});

Route::group(['prefix' => '/admin', 'middleware' => 'admin.auth'], function(){
    Route::get('/', function(){
        return view('admin.index');
    });

    Route::get('/contact/create', 'ContactController@create');
    Route::get('/contact/{id}/edit', 'ContactController@edit');
    Route::get('/contact/{id}', 'ContactController@show');
    Route::put('/roomcontacts/{id}', 'ContactController@update');
    Route::delete('/contact/{id}', 'ContactController@destroy')->name('contact.destroy');
    Route::resource('/contact','ContactController')->name('*', 'contact');


    Route::get('/reservations', 'HomeController@getLatestReservations')->name('reservations');

    Route::get('/restaurants/create', 'FoodController@create');
    Route::get('/restaurants/{id}/edit', 'FoodController@edit');
    Route::get('/restaurants/{id}', 'FoodController@show');
    Route::put('/restaurants/{id}', 'FoodController@update');
    Route::delete('/restaurants/{id}', 'FoodController@destroy')->name('restaurants.destroy');
    Route::resource('/restaurants','FoodController')->name('*', 'restaurants');


    Route::get('/rooms/create', 'RoomController@create');
    Route::get('/rooms/{id}/edit', 'RoomController@edit');
    Route::get('/rooms/{id}', 'RoomController@show');
    Route::put('/rooms/{id}', 'RoomController@update');
    Route::delete('/rooms/{id}', 'RoomController@destroy')->name('rooms.destroy');
    Route::resource('/rooms','RoomController')->name('*', 'rooms');


    Route::get('/offers/create', 'TripController@create');
    Route::get('/offers/{id}/edit', 'TripController@edit');
    Route::get('/offers/{id}', 'TripController@show');
    Route::put('/offers/{id}', 'TripController@update');
    Route::delete('/offers/{id}', 'TripController@destroy')->name('offers.destroy');
    Route::resource('/offers','TripController')->name('*', 'offers');


    Route::get('/booking/create', 'FlightController@create');
    Route::get('/booking/{id}/edit', 'FlightController@edit');
    Route::get('/booking/{id}', 'FlightController@show');
    Route::put('/booking/{id}', 'FlightController@update');
    Route::delete('/booking/{id}', 'FlightController@destroy')->name('booking.destroy');
    Route::resource('/booking','FlightController')->name('*', 'booking');




    // Route::resource('/restaurants','FoodController')->name('*', 'restaurants');
    // Route::resource('/booking','FlightController')->name('*', 'booking');
    // Route::resource('/offers','TripController')->name('*', 'offers');
    Route::post('/replayForEmail/{id}','ContactController@replayForEmail')->name('replayForEmail');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mail', 'HomeController@mail');
Route::get('/phpinfo', function() {
    phpinfo();
});
