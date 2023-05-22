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


Route::group(['middleware' => 'api', 'prefix' => 'admin'], function ($router) {

    Route::post('login', 'App\Http\Controllers\adminController@login');
    Route::post('register', 'App\Http\Controllers\adminController@register');
    Route::post('logout', 'App\Http\Controllers\adminController@logout');
    Route::post('refresh', 'App\Http\Controllers\adminController@refresh');
    Route::post('myData', 'App\Http\Controllers\adminController@myData');

});


Route::group(['middleware' => 'api', 'prefix' => 'doctor'], function ($router) {

    Route::post('login', 'App\Http\Controllers\doctorController@login');
    Route::post('register', 'App\Http\Controllers\doctorController@register');//->withoutMiddleware('checkToken');
    Route::post('logout', 'App\Http\Controllers\doctorController@logout');
    Route::post('refresh', 'App\Http\Controllers\doctorController@refresh');
    Route::post('myData', 'App\Http\Controllers\doctorController@myData');

});

