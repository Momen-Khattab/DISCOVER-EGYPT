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
        // dd($request->except('_token'));
        $this->validate($request, [
            // Validation rules
            "hotel_name"     => 'required|string',
            "room_no"        => 'required|string',
            "size"           => 'required',
            "cost_per_night" => 'nullable',
            "status"         => 'required|boolean',
            "has_offer"      => 'nullable|boolean',
            // "image"       => "required|mime_types:jpeg,bmp,png,gif,jpg,tiff",
            "image"          => "nullable",
            "notes"          => "required|string"
        ], [], [
            // Translation 
            "hotel_name"     => trans('app.hotel_name'),
            "room_no"        => trans('app.room_no'),
            "size"           => trans('app.size'),
            "cost_per_night" => trans('app.cost_per_night'),
            "status"         => trans('app.status'),
            "has_offer"      => trans('app.has_offer'),
            "image"          => trans('app.image'),
            "notes"          => trans('app.notes')
        ]);
        
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/rooms');
            dd($path);
        }

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
        $room = Room::findOrFail($id);
        
        // return view('admin.rooms.show', ['room' => $room]);
        return view('admin.rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.rooms.edit', compact('room'));
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
        $room = Room::findOrFail($id);
        
        $this->validate($request, [
            // Validation rules
            "hotel_name"     => 'required|string',
            "room_no"        => 'required|string',
            "size"           => 'required',
            "cost_per_night" => 'nullable',
            "status"         => 'required|boolean',
            "has_offer"      => 'nullable|boolean',
            // "image"       => "required|mime_types:jpeg,bmp,png,gif,jpg,tiff",
            "image"          => "nullable",
            "notes"          => "required|string"
        ], [], [
            // Translation 
            "hotel_name"     => trans('app.hotel_name'),
            "room_no"        => trans('app.room_no'),
            "size"           => trans('app.size'),
            "cost_per_night" => trans('app.cost_per_night'),
            "status"         => trans('app.status'),
            "has_offer"      => trans('app.has_offer'),
            "image"          => trans('app.image'),
            "notes"          => trans('app.notes')
        ]);

        $room->update($request->all());

        return redirect()->route('rooms.index')->withSuccess('Saved successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        
        $room->delete();
        return redirect()->route('rooms.index')->withSuccess('Saved successfully');

    }
}
