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

Route::group(['middleware' => ['api', 'checkToken:patient'], 'prefix' => 'patient'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\PatientController@login')->withoutMiddleware('checkToken:patient')->name('patient.login');
    Route::post('register', 'App\Http\Controllers\Api\PatientController@register')->withoutMiddleware('checkToken:patient');
    Route::post('logout', 'App\Http\Controllers\Api\PatientController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\PatientController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\PatientController@myData');
    Route::post('update', 'App\Http\Controllers\Api\PatientController@update');
    Route::post('bookingRequest', 'App\Http\Controllers\Api\PatientController@bookingRequest');
    Route::post('myReport', 'App\Http\Controllers\Api\PatientController@myReport');
});
