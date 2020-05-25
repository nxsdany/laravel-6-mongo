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

Route::get('/', function () {
    return view('home');
});

Route::post('/product/store', 'ProductController@store')->name('product_store');
Route::resource('product', 'ProductController');
Route::post('/review/store/{id}', 'ReviewController@store')->name('review_store');
Route::resource('review', 'ReviewController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
