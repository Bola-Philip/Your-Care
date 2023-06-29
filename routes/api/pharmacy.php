<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['api','auth:pharmacy'], 'prefix' => 'pharmacy'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\PharmacyController@login')->withoutMiddleware('auth:pharmacy');
    Route::post('register', 'App\Http\Controllers\Api\PharmacyController@register')->withoutMiddleware('auth:pharmacy');
    Route::post('show/{pharmacy_id}', 'App\Http\Controllers\Api\PharmacyController@show')->withoutMiddleware('auth:pharmacy');
    Route::post('logout', 'App\Http\Controllers\Api\PharmacyController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\PharmacyController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\PharmacyController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\PharmacyController@update');
    Route::post('addProduct', 'App\Http\Controllers\Api\PharmacyController@addProduct');
    Route::post('addProductImage/{product_id}', 'App\Http\Controllers\Api\PharmacyController@addProductImage');
    Route::post('deleteMyAccount', 'App\Http\Controllers\Api\PharmacyController@destroy');
    Route::post('delete/{pharmacy_id}', 'App\Http\Controllers\Api\PharmacyController@destroy');

});
