<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function restaurants(){
        return view('website.restaurants');
    }
    public function index()
    {
        $foods = Food::orderByDesc('id')->paginate(10);

        return view('admin.restaurants.index', compact('foods'));
   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.restaurants.create');
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
            "food_no"           => 'required|string',
            "Restaurant_name"   => 'required|string',
            "cost"              => 'required',
            "has_offer"         => 'nullable',
            "number"            => 'nullable',
            "address"           => 'nullable|boolean',
            // "image"          => "required|mime_types:jpeg,bmp,png,gif,jpg,tiff",
            "image"             => "nullable",
            "notes"             => "required|string"
        ], [], [
            // Translation 
            "food_no"           => trans('app.hotel_name'),
            "Restaurant_name"   => trans('app.Restaurant_name'),
            "cost"              => trans('app.cost'),
            "has_offer"         => trans('app.has_offer'),
            "number"            => trans('app.number'),
            "address"           => trans('app.address'),
            "image"             => trans('app.image'),
            "notes"             => trans('app.notes')
        ]);
        
        // if($request->hasFile('image')){
        //     $path = $request->file('image')->store('public/foods');
        //     dd($path);
        // }

        $food = Food::create($request->all());
        return redirect()->route('restaurants.index')->withSuccess('Saved successfully');
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
        $food = Food::findOrFail($id);
        
        // return view('admin.rooms.show', ['room' => $food]);
        return view('admin.restaurants.show', compact('food'));
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
        $food = Food::findOrFail($id);
        return view('admin.restaurants.edit', compact('food'));
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
