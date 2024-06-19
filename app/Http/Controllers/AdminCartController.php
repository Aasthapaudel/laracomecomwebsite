<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddTocart;

class AdminCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cart = AddTocart::all();
        return view('admindashboard.admincart', compact('cart'));

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
        $cart= AddTocart::findOrFail($id);
        return view('admindashboard.cartedit', compact('cart'));

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

          $cart = AddTocart::findOrFail($id);

        $request->validate([
            'quantity' => 'required|integer',
            'product_id' => 'required|string',
            'user_id' => 'required|string',
        ]);

        $cart->update([
            'quantity' => $request->quantity,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('admincart.index', $cart->id)->with('success', 'Cart item updated successfully');
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
        $cart = AddTocart::findOrFail($id);
        $cart->delete();

        return redirect()->route('productcrud.index')->with('success', 'Product deleted successfully.');

    }

}
