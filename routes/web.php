<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/catalog', 'App\Http\Controllers\ProductController@catalog');
Route::get('/catalog/{id}', 'App\Http\Controllers\ProductController@catalogProducts');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@getProduct');
Route::get('/about', 'App\Http\Controllers\ProductController@about');
Route::get('/buy', 'App\Http\Controllers\ProductController@buy');

Route::post('/add_product', 'App\Http\Controllers\ProductController@add');
Route::post('/delete_product', 'App\Http\Controllers\ProductController@delete');
Route::get('/admin', 'App\Http\Controllers\AdminController@admin');
Route::post('/login', 'App\Http\Controllers\AdminController@login');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');

