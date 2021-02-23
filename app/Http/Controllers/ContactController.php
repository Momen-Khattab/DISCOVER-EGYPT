<?php

namespace App\Http\Controllers;

use App\Mail\ReplaySent;
use App\Models\Contact;
use App\Models\ContactReplay;
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
        $contacts = Contact::orderByDesc('id')->paginate(10);

        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.contact.create');

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
        $contact = Contact::find($id);
        return view('admin.contact.show', compact('contact'));
    }


    public function replayForEmail($id){
        $this->validate(request(), [
            'content' => 'required|string|min:5'
        ],[], [
            'content' => 'Replay content'
        ]);
        // Get contact
        $contact = Contact::findOrFail($id);
        // Add repaly
        $admin = auth('admin')->user();
        $replay = new ContactReplay();
        $replay->contact_id = $contact->id;
        $replay->admin_id = $admin->id;
        $replay->content = request()->content;
        $replay->save();

        Mail::to($replay->contact->email)->send(new ReplaySent($replay));

        return redirect()->route('contact.index')->withSuccess('Email sent successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $id)
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
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $id)
    {
        //
        $contact = Contact::findOrFail($id);

        $contact->delete();
        return redirect()->route('contact.index')->withSuccess('deleted successfully');

    }
}
