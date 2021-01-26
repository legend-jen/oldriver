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


Route::get('/count', function () {
    $data =[
        'title' => '老司機' 
    ];

    return view('count')->with("data",$data);    
    
});

Route::get('/', 'ProductsController@index');
Route::get('/add-to-cart/{product}', "CartController@add")->name('cart.add');
Route::get('/car/add/{id}', 'UserController@store');