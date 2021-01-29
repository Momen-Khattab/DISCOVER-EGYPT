<?php

namespace App\Http\Controllers;

use App\Models\FlightReservation;
use App\Models\FoodReservation;
use App\Models\RoomReservation;
use App\Models\TripReservation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'mail']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('website.index');
    }

    public function mail(){
        return view('emails.contact');
    }

    public function getLatestReservations(){
        $latestFoodsReservations = FoodReservation::latest('created_at')->limit(5)->get();
        $latestFlightsReservations = FlightReservation::latest('created_at')->limit(5)->get() ;
        $latestRoomsReservations = RoomReservation::latest('created_at')->limit(5)->get() ;
        $latestTripsReservations = TripReservation::latest('created_at')->limit(5)->get() ;


        return view('admin.reservations.index', compact('latestFoodsReservations', 'latestFlightsReservations', 'latestRoomsReservations', 'latestTripsReservations'));


    }
}
