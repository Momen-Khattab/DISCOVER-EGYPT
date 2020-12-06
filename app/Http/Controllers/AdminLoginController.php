<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function loginView(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $credentials = $request->except('_token');
        
        $logged = Auth::guard('admin')->attempt($credentials);
        if($logged){
            Auth::login(Auth::guard('admin')->user());
        }

        // dd(auth('admin')->check());
        return redirect()->to('/admin');

    }

}
