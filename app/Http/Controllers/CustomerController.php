<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function home_page(){

        $users = Auth::user();
        return view('homepage.index',compact('users'));
    }

    public function catalog_page(){
        $users = Auth::user();
        return view('customer.catalog',compact('users'));
    }

    public function orderform_page(){
        $users = Auth::user();
        return view('customer.order_form',compact('users'));
    }

    public function orderlist_page(){
        $users = Auth::user();
        return view('customer.order_list',compact('users'));
    }

    public function orderdetail_page(){
        $users = Auth::user();
        return view('customer.detail_order',compact('users'));
    }
}
