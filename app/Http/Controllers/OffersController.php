<?php

namespace App\Http\Controllers;
use App\Models\Offers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offers(){
        return view('website.offers');
    }

    public function index(){
        $offers=Offers::orderByDesc('id')->paginate(10);
        return view('admin.offers.index',compact('offers'));
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
        //
        $this->validate($request,[
            "offer_no"=>'required|string',
            "offer_name"=>'required|string',
            "capacity"=>'required|string',
            "cost"=>'required|string',
            "has_discount"=>'required|boolean',
            "notes"=>'required|string'
            
        ],[],[
            "offer_no"=>'Offer Number',
            "offer_name"=>'Offer Name',
            "capacity"=>'Capacity',
            "cost"=>'Cost',
            "has_discount"=>'Has Discount',
            "notes"=>'Notes'
        ]);
        $offers=Offers::create($request->all());
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
        return view('admin.offers.show');

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
        return view('admin.offers.edit');

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
