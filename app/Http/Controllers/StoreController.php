<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class StoreController extends Controller
{
    public function index()
    {
        $store_products = Products::where('status', 'store')->sortable()->paginate();

        return view('store')
            ->with('store_products', $store_products)
        ;
    }
}
