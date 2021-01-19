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
        $foods = Food::latest('id')->get();
        return view('website.restaurants', compact('foods'));
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
        // dd($request->all());
        $this->validate($request, [
            // Validation rules
            "food_no"           => 'required|string',
            "food_name"           => 'required|string',
            "restaurant_name"   => 'required|string',
            "cost"              => 'required',
            "has_offer"         => 'nullable',
            "rest_no"            => 'nullable',
            "address"           => 'nullable|string',
            "image"             => "required|image",
            "notes"             => "required|string"
        ], [], [
            // Translation 
            "food_no"           => trans('app.hotel_name'),
            "food_name"           => "Food name",
            "restaurant_name"   => trans('app.restaurant_name'),
            "cost"              => trans('app.cost'),
            "has_offer"         => trans('app.has_offer'),
            "rest_no"            => trans('app.rest_no'),
            "address"           => trans('app.address'),
            "image"             => trans('app.image'),
            "notes"             => trans('app.notes')
        ]);
        $data = $request->all();

        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/foods');
            $data['image'] = $path;
        }

        $food = Food::create($data);
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
        $restaurant = Food::findOrFail($id);
        return view('admin.restaurants.show', compact('restaurant'));
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
        $food = Food::findOrFail($id);

        $this->validate($request, [
            // Validation rules
            "food_no"           => 'required|string',
            "restaurant_name"   => 'required|string',
            "cost"              => 'required',
            "has_offer"         => 'nullable',
            "rest_no"            => 'nullable',
            "address"           => 'nullable|string',
            "image"             => "nullable|image",
            "notes"             => "required|string"
        ], [], [
            // Translation 
            "food_no"           => trans('app.hotel_name'),
            "restaurant_name"   => trans('app.restaurant_name'),
            "cost"              => trans('app.cost'),
            "has_offer"         => trans('app.has_offer'),
            "rest_no"            => trans('app.rest_no'),
            "address"           => trans('app.address'),
            "image"             => trans('app.image'),
            "notes"             => trans('app.notes')
        ]);
        $data = $request->all();

        if($request->hasFile('image')){
            if(!empty($food->image)){
                // Delete the old image
                \Storage::delete($food->image);
            }

            $path = $request->file('image')->store('public/foods');
            $data['image'] = $path;
        }

        $food->update($data);
        return redirect()->route('restaurants.index')->withSuccess('Saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        return redirect()->route('restaurants.index')->withSuccess('Deleted successfully');
    }
}
