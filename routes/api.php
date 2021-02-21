<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Product routes
Route::get('products', 'App\Http\Controllers\ProductController@index');
Route::post('products', 'App\Http\Controllers\ProductController@store');
Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');
Route::put('products', 'App\Http\Controllers\ProductController@update');
Route::delete('products/{product}', 'App\Http\Controllers\ProductController@destroy');
Route::patch('products/{id}','App\Http\Controllers\ProductController@setPrice');

//Sale routes
Route::get('sale', 'App\Http\Controllers\SaleController@index');
Route::post('sale', 'App\Http\Controllers\SaleController@store');
Route::get('sale/{sale}', 'App\Http\Controllers\SaleController@show');
Route::put('sale', 'App\Http\Controllers\SaleController@update');
Route::delete('sale/{sale}', 'App\Http\Controllers\SaleController@destroy');

//Buy routes
Route::get('buy', 'App\Http\Controllers\BuyController@index');
Route::post('buy', 'App\Http\Controllers\BuyController@store');
Route::get('buy/{buy}', 'App\Http\Controllers\BuyController@show');
Route::put('buy', 'App\Http\Controllers\BuyController@update');
Route::delete('buy/{buy}', 'App\Http\Controllers\BuyController@destroy');

//Properties routes
Route::get('properties', 'App\Http\Controllers\PropertyController@index');
Route::post('property', 'App\Http\Controllers\PropertyController@store');
Route::get('property/{property}', 'App\Http\Controllers\PropertyController@show');
Route::put('property', 'App\Http\Controllers\PropertyController@update');
Route::delete('property/{property}', 'App\Http\Controllers\PropertyController@destroy');
