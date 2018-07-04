<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index(Products $product)
    {
        $products = $product->sortable()->paginate();

        return view('Products')
            ->with('products', $products)
        ;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'slug' => 'required|string|unique:products',
        ]);

        $product = new Products;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->slug = strtolower(str_replace(' ', '-', $request->slug));
        $product->save();

        return redirect()->route('products');
    }

    public function putup(Products $product)
    {
        $product->status = 'store';
        $product->save();

        return redirect()->route('products');
    }
}
