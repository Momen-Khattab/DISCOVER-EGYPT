<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking(){
        return view('website.booking');
    }
    public function index(){
        return view('admin.booking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $booking=booking::OrderbyDesc('id')->paginate(10);
        return view('admin.booking.create',compact('booking'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            "airport_name"=>'required|string',
            "flight_no"=>'required|string',
            "flight_company"=>'required|string',
            "flight_distination"=>'nullable|string',
            "has_offer"=>'nullable|string',
            "travel_date"=>'required|date',
            "seat_no"=>'nullable|string',
            "flight_cost"=>'required|string'
        ],[],[
            "airport_name"=>'Airport Name',
            "flight_no"=>'Flight Number',
            "flight_company"=>'Flight Company',
            "flight_distination"=>'Flight Distination',
            "has_offer"=>'Has Offer',
            "travel_date"=>'Travel Date',
            "seat_no"=>'Seat Number',
            "flight_cost"=>'Flight Cost'
        ]);
        $booking = Booking::create($request->all());
        return redirect()->route('booking.index')->withsuccessfully('Saved successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admin.booking.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.booking.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
