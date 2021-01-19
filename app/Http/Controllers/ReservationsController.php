<?php

namespace App\Http\Controllers;

use App\Mail\ReplaySent;
use App\Models\Resevations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        //
    }



    public function index()
    {
        $Resevations = Resevations::orderByDesc('id')->paginate(10);

        return view('admin.resevations.index', compact('resevations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.resevations.create');

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
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Resevations = Resevations::find($id);
        return view('admin.resevations.show', compact('resevations'));
    }


    public function replayForEmail(Resevations $Resevations, Request $request){
        $this->validate($request, [
            'content' => 'required|string|min:5'
        ],[], [
            'content' => 'Replay content'
        ]);

        $admin = auth('admin')->user();
        $Resevations->save();

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Resevations $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resevations $Resevations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resevations $id)
    {
        //
        $Resevations = Resevations::findOrFail($id);
        
        $Resevations->delete();
        return redirect()->route('resevations.index')->withSuccess('deleted successfully');

    }
}
