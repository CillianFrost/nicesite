<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller
{
    public function index()
    {
        
        $products = Products::where('sales', 1)->get();

        return view('home')
            ->with('products', $products)
        ;
    }
}
