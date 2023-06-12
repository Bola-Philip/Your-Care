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

Route::group(['middleware' => ['api', 'checkToken:lab'], 'prefix' => 'lab'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\LabController@login')->withoutMiddleware('checkToken:lab');
    Route::post('register', 'App\Http\Controllers\Api\LabController@register')->withoutMiddleware('checkToken:lab');
    Route::post('logout', 'App\Http\Controllers\Api\LabController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\LabController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\LabController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\LabController@edit');
    Route::post('ourReply', 'App\Http\Controllers\Api\LabController@ourReply');
});
