<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function index(){
        $products=Product::all();
        return view('theme.index', compact('products'));
    }



    public function about(){
        return view('theme.about');
    }

    public function contact(){
        return view('theme.contact');
    }
    public function checkout(){
        return view('theme.checkout');
    }
    public function shop_details(){
        return view('theme.shop-details');
    }

    public function Shopping(){
        return view('theme.shopping-cart');
    }
    public function Shop(){
        return view('theme.shop');
    }
}
