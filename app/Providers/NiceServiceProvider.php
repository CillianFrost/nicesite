<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Pages;
use App\Products;

class NiceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $pages = [];
        if (\Schema::hasTable('pages')) {
            $pages = Pages::where('publish', 1)->get();
        }

        /* $products = [];
        if (\Schema::hasTable('products')) {
            $products = Products::where('publish', 1)->get();
        } */

        view()->share('pages', $pages);
        /* view()->share('products', $products); */
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
