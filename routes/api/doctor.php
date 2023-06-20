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

Route::group(['middleware' => ['api', 'checkToken:doctor'], 'prefix' => 'doctor'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\DoctorController@login')->withoutMiddleware('checkToken:doctor')->name('doctor.login');
    Route::post('register', 'App\Http\Controllers\Api\DoctorController@register')->withoutMiddleware('checkToken:doctor');
    Route::post('logout', 'App\Http\Controllers\Api\DoctorController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\DoctorController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\DoctorController@myData');
    Route::post('experience/{id}', 'App\Http\Controllers\Api\DoctorController@experience');
    Route::post('patientTakeService', 'App\Http\Controllers\Api\DoctorController@patientTakeService');
    Route::post('myReports/add', 'App\Http\Controllers\Api\DoctorController@addReport');
    Route::post('myReports/{id}', 'App\Http\Controllers\Api\DoctorController@myReports');
        Route::post('edit/{id}', 'App\Http\Controllers\Api\DoctorController@edit');
        Route::post('show/{id}', 'App\Http\Controllers\Api\DoctorController@show');
});
