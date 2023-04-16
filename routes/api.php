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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/products", "App\Http\Controllers\ProductsController@index");
Route::get("/products/{id}", "App\Http\Controllers\ProductsController@getOne");
Route::put("/products/edit/{id}", "App\Http\Controllers\ProductsController@update");
Route::delete("/products/delete/{id}", "App\Http\Controllers\ProductsController@destroy");
Route::post("/products/add", "App\Http\Controllers\ProductsController@store");
