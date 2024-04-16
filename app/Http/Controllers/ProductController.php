<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'mrp' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000',
        ]);

        //generate image name
        $imageName = time() . "." . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        //create object & upload to database
        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->mrp = $request->mrp;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->mrp = $request->mrp;

        $product->save();
        return back()->withSuccess('Product Details Added Success');
    }
}
