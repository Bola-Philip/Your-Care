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

Route::group(['middleware' => ['api', 'checkToken:pharmacy'], 'prefix' => 'pharmacy'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\PharmacyController@login')->withoutMiddleware('checkToken:pharmacy')->name('pharmacy.login');
    Route::post('register', 'App\Http\Controllers\Api\PharmacyController@register')->withoutMiddleware('checkToken:pharmacy');
    Route::post('logout', 'App\Http\Controllers\Api\PharmacyController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\PharmacyController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\PharmacyController@myData');
    Route::post('update', 'App\Http\Controllers\Api\PharmacyController@edit');
    Route::post('addProduct', 'App\Http\Controllers\Api\PharmacyController@addProducts');
    Route::post('addProductImage', 'App\Http\Controllers\Api\PharmacyController@addProductImages');
});
