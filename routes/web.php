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

Route::get('/restaurants', 'RestaurantsController@restaurants')->name('visitorRestaurants');

Route::get('/booking', 'BookingController@booking')->name('visitorBooking');

Route::get('/offers', 'OffersController@offers')->name('visitorOffers');;


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

/**
 * Admin routes
 */
Route::get('/admin', function(){
    return view('admin.index');   
});

Route::get('/admin/test_db', function(){
    // \DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])

    // $room = Room::create(['room_no' => 'A02', 
    //     'hotel_name' => 'Hilton', 
    //     'size' => 'double', 
    //     'cost_per_night' => 150, 
    //     'has_offer' => 0, 
    //     'booked_date_start' => '2020-10-10', 
    //     'booked_date_end'  => '2020-10-11',
    //     'state' => 'Gize', 
    //     'notes' => 'Amazing view!'
    //     ]);

    // By creating new room object
    $room = new Room;
    $room->room_no = 'A03';
    $room->hotel_name = 'Sameramis';
    $room->size = 'triple';
    $room->has_offer = '1';
    $room->save();

    dd($room);
});

Route::resource('/admin/rooms','RoomController')->name('*', 'rooms');
Route::resource('/admin/restaurants','RestaurantsController')->name('*', 'restaurants');
Route::resource('/admin/booking','BookingController')->name('*', 'booking');
Route::resource('/admin/offers','OffersController')->name('*', 'offers');

