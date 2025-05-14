<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function products()
    {
        $products = Product :: all();
        return view('admin.view' , ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.insert');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'image' => 'required|mimes:jpg,jpeg,png',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
          
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->image = $request->file('image')->store('images', 'public');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->status = 0;
        $product->save();

        return redirect()->back()->with('status', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
