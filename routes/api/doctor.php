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

Route::group(['middleware' => ['api', 'auth:doctor'], 'prefix' => 'doctor'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\DoctorController@login')->withoutMiddleware('auth:doctor')->name('doctor.login');
    Route::post('register', 'App\Http\Controllers\Api\DoctorController@register')->withoutMiddleware('auth:doctor');
    Route::post('logout', 'App\Http\Controllers\Api\DoctorController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\DoctorController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\DoctorController@myData');
    Route::post('report', 'App\Http\Controllers\Api\DoctorController@report');
    Route::post('patientTakeService', 'App\Http\Controllers\Api\DoctorController@patientTakeService');
});
