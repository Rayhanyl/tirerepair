<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{    
    public function landing_page(){
        
        return view('authentication.landingpage');
    }

    public function login_page(){
        
        return view('authentication.login');
    }

    public function register_page(){
        
        return view('authentication.register');
    }
}
