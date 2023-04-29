<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home_page(){
        
        return view('homepage.index');
    }

    public function catalog_page(){
        
        return view('customer.catalog');
    }

    public function orderform_page(){
        
        return view('customer.order_form');
    }

    public function orderlist_page(){
        
        return view('customer.order_list');
    }

    public function orderdetail_page(){
        
        return view('customer.detail_order');
    }
}
