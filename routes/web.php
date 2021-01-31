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




    Route::get('/count', 'CartController@index');
    Route::get('/', 'ProductsController@index');
    Route::get('/add-to-cart/{product}', "CartController@add")->name('cart.add');
    Route::get('/add-to-one/{product}', "CartController@increaseByOne")->name('one.add');
    Route::get('/reduce-to-one/{product}', "CartController@decreaseByOne")->name('one.reduce');
    Route::get('/delete-to-one/{product}', "CartController@delete")->name('one.delete');
    Route::get('/car/destroy', 'CartController@destroy');
    Route::get('/car/add/{id}', 'UserController@store');


