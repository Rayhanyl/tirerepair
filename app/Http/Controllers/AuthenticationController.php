<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;


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

    public function authentication(Request $request){

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerate();
            Alert::success('Success', 'Berhasil login');
            return redirect()->route('home.page');
        
        }else{

            Alert::warning('Warning', 'Password atau email anda salah');
            return redirect()->route('login.page')->with('Oppes! You have entered invalid credentials');
       
        }
    }

    public function register(Request $request){
        
        User::create([
            'name'  => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'phone'     => $request->phone,
            'role'      => 'customer',
        ]);

        Alert::success('Success', 'Berhasil membuat account');
        return redirect()->route('login.page');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('Success', 'Berhasil logout');
        return redirect()->route('landing.page')->with('success','Berhasil Logout');
    }
}
