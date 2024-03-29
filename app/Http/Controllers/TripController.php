<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offers(){
        $trips = Trip::latest('id')->get();
        return view('website.offers',compact('trips'));
    }

    public function index()
    {
        //
        $trips = Trip::orderByDesc('id')->paginate(10);
        return view('admin.offers.index', compact('trips'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.offers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validate($request, [
            // Validation rules
            "trip_no"               => 'required|string',
            "trip_name"             => 'required|string',
            "capacity"              => 'required|string',
            "cost"                  => 'nullable',
            "has_offer"             => 'nullable|boolean',
            "dead_line"             => 'required|date_format:d-m-Y',
            "company_number"        => 'nullable',
            "image"                 => "required|image",
            "notes"                 => "nullable"
        
        ], [], [
            // Translation 
            "trip_no"               => trans('app.trip_no'),
            "trip_name"             => trans('app.trip_name'),
            "capacity"              => trans('app.capacity'),
            "cost"                  => trans('app.cost'),
            "has_offer"             => trans('app.has_offer'),
            "dead_line"             => trans('app.dead_line'),
            "address"               => trans('app.address'),
            "company_number"        => trans('app.company_number'),
            "image"                 => trans('app.image'),
            "notes"                 => trans('app.notes')
        ]);
        
        $data['status'] = 1;
        // dd($data);
        $data = $request->all();

        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/trips');
            $data['image'] = $path;
        }
        $trip = Trip::create($data);
        return redirect()->route('offers.index')->withSuccess('Saved successfully');
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
        $trip = Trip::findOrFail($id);        
        return view('admin.offers.show', compact('trip'));
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
        $trip = Trip::findOrFail($id);
        return view('admin.offers.edit', compact('trip'));
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
        $trip = trip::findOrFail($id);
        $this->validate($request, [
            // Validation rules
            "trip_no"               => 'required|string',
            "trip_name"             => 'required|string',
            "capacity"              => 'required|string',
            "cost"                  => 'nullable',
            "has_offer"             => 'nullable|boolean',
            "dead_line"             => 'nullable',
            "company_number"        => 'nullable',
            "image"                 => "nullable|image",
            "notes"                 => "nullable"
        
        ], [], [
            // Translation 
            "trip_no"               => trans('app.trip_no'),
            "trip_name"             => trans('app.trip_name'),
            "capacity"              => trans('app.capacity'),
            "cost"                  => trans('app.cost'),
            "has_offer"             => trans('app.has_offer'),
            "dead_line"             => trans('app.dead_line'),
            "address"               => trans('app.address'),
            "company_number"        => trans('app.company_number'),
            "image"                 => trans('app.image'),
            "notes"                 => trans('app.notes')
        ]);

        $data = $request->all();

        if($request->hasFile('image')){
            if(!empty($trip->image)){
                // Delete the old image
                \Storage::delete($trip->image);
            }
            $path = $request->file('image')->store('public/trips');
            $data['image'] = $path;
        }
        $trip->update($data);

        return redirect()->route('offers.index')->withSuccess('Saved successfully');
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
        $trip = trip::findOrFail($id);
        
        $trip->delete();
        return redirect()->route('offers.index')->withSuccess('Saved successfully');
    }
}
