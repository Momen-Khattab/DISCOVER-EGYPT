<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Food;
use App\Models\FoodReservation;
use Exception;
use Illuminate\Http\Request;
use App\Mail\FoodReservationEmail;

class FrontController extends Controller
{
    public function profile(){
        $user = auth('web')->user();
        return view('website.profile', compact('user'));
    }

    public function profileSave(Request $request){
        $user = auth('web')->user();
        $data = $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:11'],
            'gender' => ['required', 'string'],
            'passport_id' => ['nullable', 'numeric', 'min:6'],
        ], [], [
            'first_name' => 'First name',
            'last_name' => 'Second name',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'passport_id' => 'Passport ID',
        ]);
        
        $user->update($data);
        return redirect()->to('/profile')->withSuccess('Saved successfully!');
    }

    public function contactSave(Request $request){
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
        ], [], [
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'message' => 'Message',
        ]);
        
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->to('/contact')->withSuccess('Sent successfully!');
    }

    public function reserveFood(Request $request){
        $user = auth('web')->user();
        $food = Food::findOrFail($request->id);

        try{
            $reservation = new FoodReservation();
            $reservation->user_id = $user->id;
            $reservation->food_id = $food->id;
            $reservation->save();

            // Send the receipt mail
            \Mail::to($reservation->user->email)->send(new FoodReservationEmail($reservation));
            return back()->withSuccess('Reservation Done');
        }catch(Exception $e){
            // Alert::error('Reservation faild', $e->getMessage());
            return back();
        }
        
        
    }
}
