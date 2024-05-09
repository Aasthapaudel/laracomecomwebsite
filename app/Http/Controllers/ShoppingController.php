<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddTocart;
use App\Models\Order;
use App\Models\OrderItem;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $order = new Order();
        $order->user_id = auth()->user()->id; // Assuming you have user authentication
        $order->bill =$request->total ; // Assuming you have user authentication
        $order->status ="pending" ; // Assuming you have user authentication
        $order->user_name = $request->name; // Assuming you have user authentication
        $order->user_address = $request->address; // Assuming you have user authentication
        $order->phone_no = $request->phone; // Assuming you have user authentication
        $order->save();

        // Get cart items
        $cartItems = AddToCart::where('user_id', auth()->user()->id)->get();

        // Move cart items to order items
        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $cartItem->product_id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->price = $cartItem->product->price; // Assuming you have a relationship with the product
            $orderItem->save();
        }

        // Remove cart items
        AddToCart::where('user_id', auth()->user()->id)->delete();

        return redirect('/home')->with('success', 'Order placed successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
