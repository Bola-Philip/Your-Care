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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {

    Route::post('login', 'App\Http\Controllers\adminController@login');
    Route::post('register', 'App\Http\Controllers\adminController@register');
    Route::post('logout', 'App\Http\Controllers\adminController@logout');
    Route::post('refresh', 'App\Http\Controllers\adminController@refresh');
    Route::post('me', 'App\Http\Controllers\adminController@me');

});

Route::get('/get','App\Http\Controllers\AuthController@login')->middleware('api');
