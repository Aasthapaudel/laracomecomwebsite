<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB; // Import the DB facade

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

    public function shopping() {
        $itemcarts = DB::table('add_tocarts')
            ->join('products', 'add_tocarts.product_id', '=', 'products.id')
            ->select('products.*','add_tocarts.quantity')
            ->get();

        return view('theme.shopping-cart', compact('itemcarts'));
    }

    public function Shop(){
        return view('theme.shop');
    }
}
