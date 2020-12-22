<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking(){
        return view('website.booking');
    }

    public function index()
    {
        //
        $flights = Flight::orderByDesc('id')->paginate(10);

        return view('admin.booking.index', compact('flights'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.booking.create');

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
        $this->validate($request, [
            // Validation rules
            "flight_no"             => 'required|string',
            "flight_company"          => 'required|string',
            "airport_name"          => 'required|string',
            "flight_destinaion"     => 'required|string',
            "travel_date"           => 'nullable|date_format:d-m-Y',
            "address"               => 'required|string',
            "company_number"        => 'nullable',
        
        ], [], [
            // Translation 
            "flight_no"             => trans('app.flight_no'),
            "flight_company"          => trans('app.flight_company'),
            "airport_name"          => trans('app.airport_name'),
            "flight_destinaion"     => trans('app.flight_destinaion'),
            "travel_date"           => trans('app.travel_date'),
            "address"               => trans('app.address'),
            "company_number"        => trans('app.company_number')
        ]);

        $flight = Flight::create($request->all());
        return redirect()->route('booking.index')->withSuccess('Saved successfully');
        
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
        $flight = Flight::findOrFail($id);
        
        // return view('admin.rooms.show', ['room' => $room]);
        return view('admin.booking.show', compact('flight'));
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
        $flight = Flight::findOrFail($id);
        return view('admin.booking.edit', compact('flight'));
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

        $flight = flight::findOrFail($id);
        $this->validate($request, [
            // Validation rules
            "flight_no"             => 'required|string',
            "company_name"          => 'required|string',
            "airport_name"          => 'required|string',
            "flight_destinaion"     => 'required|string',
            "cost"                  => 'nullable',
            "has_offer"             => 'nullable|boolean',
            "travel_date"           => 'nullable',
            "address"               => 'required|string',
            "company_number"        => 'nullable',
        
        ], [], [
            // Translation 
            "flight_no"             => trans('app.flight_no'),
            "company_name"          => trans('app.company_name'),
            "airport_name"          => trans('app.airport_name'),
            "flight_destinaion"     => trans('app.flight_destinaion'),
            "cost"                  => trans('app.cost'),
            "has_offer"             => trans('app.has_offer'),
            "travel_date"           => trans('app.travel_date'),
            "address"               => trans('app.address'),
            "company_number"        => trans('app.company_number')
        ]);

        $flight->update($request->except(['_token', '_method']));
        return redirect()->route('booking.index')->withSuccess('Saved successfully');
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
        $flight = flight::findOrFail($id);
        $flight->delete();
        return redirect()->route('booking.index')->withSuccess('Deleted successfully');
    }
}
