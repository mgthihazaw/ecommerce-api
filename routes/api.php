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

Route::get('/category', 'Api\CategoryController@index');
Route::get('/products', 'Api\ProductController@index');
Route::get('/category/{category}/products', 'Api\ProductController@getCategoryByProducts');
Route::get('/sliders', 'Api\SliderController@index');