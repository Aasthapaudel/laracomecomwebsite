<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $product = Product::all();
        return view('admindashboard.adminproduct', compact('product'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admindashboard.productcreate');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'picture' => 'required|image',
            'category_id' => 'required|integer',
            'type' => 'required',
            'isadmin' => 'required|boolean',
        ]);
$fileName=time().'.'.$request->picutre->getClientOriginalName();
        $imagePath = $request->file('picture')->store('images', $fileName);

        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'picture' => $imagePath,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'isadmin' => $request->isadmin,
        ]);

        return redirect()->route('productcrud.index')->with('success', 'Product created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admindashboard.productshow', compact('product'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admindashboard.productedit', compact('product'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'picture' => 'image',
            'category_id' => 'required|integer',
            'type' => 'required',
            'isadmin' => 'required|boolean',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('images', 'public');
            $product->picture = $imagePath;
        }

        $product->title = $request->title;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->type = $request->type;
        $product->isadmin = $request->isadmin;

        $product->save();

        return redirect()->route('productcrud.index')->with('success', 'Product updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('productcrud.index')->with('success', 'Product deleted successfully.');
    }
}
