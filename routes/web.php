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

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/','ProductController@index')->name('products.index');
Route::get('/products/{id}','ProductController@show')->name('products.show');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('create','ProductController@create')->name('products.create');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('products/{id}','ProductController@update')->name('products.update');

