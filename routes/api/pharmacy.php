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

Route::group(['middleware' => ['api', 'auth:pharmacy'], 'prefix' => 'pharmacy'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\PharmacyController@login')->withoutMiddleware('auth:pharmacy')->name('pharmacy.login');
    Route::post('register', 'App\Http\Controllers\Api\PharmacyController@register')->withoutMiddleware('auth:pharmacy');
    Route::post('logout', 'App\Http\Controllers\Api\PharmacyController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\PharmacyController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\PharmacyController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\PharmacyController@edit');
    Route::post('addProducts', 'App\Http\Controllers\Api\PharmacyController@addProducts');
    Route::post('addProductImages', 'App\Http\Controllers\Api\PharmacyController@addProductImages');
});
