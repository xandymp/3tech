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

Route::get('/products', 'ProductController@apiIndex');
Route::get('products/{id}', 'ProductController@apiShow');
Route::post('products', 'ProductController@apiStore');
Route::put('products/{id}', 'ProductController@apiUpdate');
Route::delete('products/{id}', 'ProductController@apiDelete');
