<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rooms(){
        return view('website.rooms');
    }

    public function index(){
        // $rooms = Room::all();
        // $rooms = Room::select('id', 'room_no', 'hotel_name')->get(); // Return a collection of models
        // $room = Room::find(1); // Find by ID, returns an object
        // $rooms = Room::latest('created_at')->get(); // Retrun latest rooms added
        // $rooms = Room::orderBy('id')->get(); // Retrun latest rooms added
        // $rooms = Room::orderByDesc('id')->get(); // Retrun latest rooms added
        // $rooms = Room::orderByDesc('id')->first(); // Retrun latest rooms added
        // $rooms = Room::limit(1)->get(); // Retrun latest rooms added

        // Pagination
        $rooms = Room::orderByDesc('id')->paginate(10);

        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        $this->validate($request, [
            "hotel_name" => 'required|string',
            "room_no" => 'required|string',
            "size" => 'required',
            "cost_per_night" => 'nullable',
            "state" => 'required|boolean',
            "has_offer" => 'nullable|boolean',
            "notes" => "required|string"
        ], [], [
            "hotel_name" => 'Hotel name',
            "room_no" => 'Room Number',
            "size" => 'Size',
            "cost_per_night" => 'The Cost',
            "state" => 'The Room Status',
            "has_offer" => 'Has Offer?',
            "notes" => "Room Notes"
        ]);

        $room = Room::create($request->all());
        return redirect()->route('rooms.index')->withSuccess('Saved successfully');
        // return back()->withSuccess('Saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.rooms.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.rooms.edit');
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
