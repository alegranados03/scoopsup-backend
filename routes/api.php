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
Route::get('products', 'ProductController@index');
Route::post('products', 'ProductController@store');
Route::get('products/{id}', 'ProductController@show');
Route::put('products', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@destroy');

//Sale routes
Route::get('sale', 'SaleController@index');
Route::post('sale', 'SaleController@store');
Route::get('sale/{id}', 'SaleController@show');
Route::put('sale', 'SaleController@update');
Route::delete('sale/{id}', 'SaleController@destroy');

//Buy routes
Route::get('buy', 'BuyController@index');
Route::post('buy', 'BuyController@store');
Route::get('buy/{id}', 'BuyController@show');
Route::put('buy', 'BuyController@update');
Route::delete('buy/{id}', 'BuyController@destroy');

