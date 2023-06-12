<?php

use App\Http\Controllers\clientController;
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


Route::group(['middleware' => ['api','auth:admin'], 'prefix' => 'admin'], function ($router) {

    Route::post('login', 'App\Http\Controllers\adminController@login')->withoutMiddleware('auth:admin');
    Route::post('register', 'App\Http\Controllers\adminController@register')->withoutMiddleware('auth:admin');
    Route::post('logout', 'App\Http\Controllers\adminController@logout');
    Route::post('refresh', 'App\Http\Controllers\adminController@refresh');
    Route::post('myData', 'App\Http\Controllers\adminController@myData');

});


Route::group(['middleware' => ['api','auth:doctor'], 'prefix' => 'doctor'], function ($router) {

    Route::post('login', 'App\Http\Controllers\doctorController@login')->withoutMiddleware('auth:doctor');;
    Route::post('register', 'App\Http\Controllers\doctorController@register')->withoutMiddleware('auth:doctor');
    Route::post('logout', 'App\Http\Controllers\doctorController@logout');
    Route::post('refresh', 'App\Http\Controllers\doctorController@refresh');
    Route::post('myData', 'App\Http\Controllers\doctorController@myData');
    Route::post('report', 'App\Http\Controllers\doctorController@report');
    Route::post('edit', 'App\Http\Controllers\doctorController@edit');
    Route::post('show/{doctor_id}', 'App\Http\Controllers\doctorController@show');
    Route::post('patientTakeService', 'App\Http\Controllers\doctorController@patientTakeService');
    Route::post('experience', 'App\Http\Controllers\doctorController@experience');

});

Route::group(['middleware' => ['api','auth:patient'], 'prefix' => 'patient'], function ($router) {

    Route::post('login', 'App\Http\Controllers\patientController@login')->withoutMiddleware('auth:patient');
    Route::post('register', 'App\Http\Controllers\patientController@register')->withoutMiddleware('auth:patient');
    Route::post('logout', 'App\Http\Controllers\patientController@logout');
    Route::post('refresh', 'App\Http\Controllers\patientController@refresh');
    Route::post('myData', 'App\Http\Controllers\patientController@myData');
    Route::post('edit', 'App\Http\Controllers\patientController@edit');
    Route::post('bookingRequest/{doctor_id}', 'App\Http\Controllers\patientController@bookingRequest');
    Route::post('myReport', 'App\Http\Controllers\patientController@myReport');

});

Route::group(['middleware' => ['api','auth:pharmacy'], 'prefix' => 'pharmacy'], function ($router) {

    Route::post('login', 'App\Http\Controllers\pharmacyController@login')->withoutMiddleware('auth:pharmacy');
    Route::post('register', 'App\Http\Controllers\pharmacyController@register')->withoutMiddleware('auth:pharmacy');
    Route::post('logout', 'App\Http\Controllers\pharmacyController@logout');
    Route::post('refresh', 'App\Http\Controllers\pharmacyController@refresh');
    Route::post('myData', 'App\Http\Controllers\pharmacyController@myData');
    Route::post('edit', 'App\Http\Controllers\pharmacyController@edit');
    Route::post('addProducts', 'App\Http\Controllers\pharmacyController@addProducts');
    Route::post('show/{pharmacy_id}', 'App\Http\Controllers\pharmacyController@show');
    Route::delete('destroy/{pharmacy_id}', 'App\Http\Controllers\pharmacyController@destroy');
    Route::post('addProductImages', 'App\Http\Controllers\pharmacyController@addProductImages');

});

Route::group(['middleware' => ['api','auth:lab'], 'prefix' => 'lab'], function ($router) {

    Route::post('login', 'App\Http\Controllers\labController@login')->withoutMiddleware('auth:lab');
    Route::post('register', 'App\Http\Controllers\labController@register')->withoutMiddleware('auth:lab');
    Route::post('logout', 'App\Http\Controllers\labController@logout');
    Route::post('refresh', 'App\Http\Controllers\labController@refresh');
    Route::post('myData', 'App\Http\Controllers\labController@myData');
    Route::post('edit', 'App\Http\Controllers\labController@edit');
    Route::post('show/{lab_id}', 'App\Http\Controllers\labController@show');
    Route::post('addSample', 'App\Http\Controllers\labController@addSample');
    Route::post('destroy/{lab_id}', 'App\Http\Controllers\labController@destroy');
    Route::post('ourReply', 'App\Http\Controllers\labController@ourReply');

});

Route::group(['middleware' => ['api','auth:admin'], 'prefix' => 'WorkTime'], function ($router) {

    Route::post('add', 'App\Http\Controllers\workTimeController@add');
    Route::post('show/{Work_time_id}', 'App\Http\Controllers\workTimeController@show');
    Route::post('edit/{work_time_id}', 'App\Http\Controllers\workTimeController@edit');
    Route::post('destroy/{work_time_id}', 'App\Http\Controllers\workTimeController@destroy');

});
