<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
// use App\Models\Order;
use App\Models\Product;
use App\Models\AddTocart;
use App\Models\User;

class adminController extends Controller
{
    //
    public function index(){
        return view('adminlayout.index');
    }
    public function product(){
        $product=Product::all();
        return view('admindashboard.adminproduct',compact('product'));
    }
    public function Order(){
        $order=Order::all();
        return view('admindashboard.adminorder',compact('order'));
    }
    public function Cart(){
        $cart=AddTocart::all();
        return view('admindashboard.admincart',compact('cart'));
    }
    public function Userdetails(){
        $user=User::all();
        return view('admindashboard.adminuserdetail',compact('user'));
    }
}
