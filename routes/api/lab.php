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

Route::group(['middleware' => ['api','auth:lab'], 'prefix' => 'lab'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\LabController@login')->withoutMiddleware('auth:lab');
    Route::post('register', 'App\Http\Controllers\Api\LabController@register')->withoutMiddleware('auth:lab');
    Route::post('logout', 'App\Http\Controllers\Api\LabController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\LabController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\LabController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\LabController@update');
    Route::post('show/{lab_id}', 'App\Http\Controllers\Api\LabController@show');
    Route::post('addSample', 'App\Http\Controllers\Api\LabController@addSample');
    Route::post('ourReply', 'App\Http\Controllers\Api\LabController@ourReply');
    Route::post('delete/{lab_id}', 'App\Http\Controllers\Api\LabController@delete');
    Route::post('deleteMyAccount', 'App\Http\Controllers\Api\LabController@destroy');

});
