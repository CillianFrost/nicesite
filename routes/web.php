<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Pages routes

Route::get('/', 'HomeController@index')->name('home');
Route::get('/store', 'StoreController@index')->name('store');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/users', 'UsersController@index')->name('users');

// Products routes

Route::post('/products', 'ProductsController@store')->name('products.store');
Route::post('/products', 'ProductsController@putup')->name('products.putup');