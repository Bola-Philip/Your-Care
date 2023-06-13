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

    Route::post('login', 'App\Http\Controllers\Api\Admin\AdminController@login')->withoutMiddleware('auth:admin');
    Route::post('register', 'App\Http\Controllers\Api\Admin\AdminController@register')->withoutMiddleware('auth:admin');
    Route::post('logout', 'App\Http\Controllers\Api\Admin\AdminController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\Admin\AdminController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\Admin\AdminController@myData');

});


Route::group(['middleware' => ['api','auth:doctor'], 'prefix' => 'doctor'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\DoctorController@login')->withoutMiddleware('auth:doctor');;
    Route::post('register', 'App\Http\Controllers\Api\DoctorController@register')->withoutMiddleware('auth:doctor');
    Route::post('logout', 'App\Http\Controllers\Api\DoctorController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\DoctorController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\DoctorController@myData');
    Route::post('report', 'App\Http\Controllers\Api\DoctorController@report');
    Route::post('edit', 'App\Http\Controllers\Api\DoctorController@edit');
    Route::post('show/{doctor_id}', 'App\Http\Controllers\Api\DoctorController@show');
    Route::post('patientTakeService', 'App\Http\Controllers\Api\DoctorController@patientTakeService');
    Route::post('experience', 'App\Http\Controllers\Api\DoctorController@experience');

});

Route::group(['middleware' => ['api','auth:patient'], 'prefix' => 'patient'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\PatientController@login')->withoutMiddleware('auth:patient');
    Route::post('register', 'App\Http\Controllers\Api\PatientController@register')->withoutMiddleware('auth:patient');
    Route::post('logout', 'App\Http\Controllers\Api\PatientController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\PatientController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\PatientController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\PatientController@edit');
    Route::post('bookingRequest/{doctor_id}', 'App\Http\Controllers\Api\PatientController@bookingRequest');
    Route::post('myReport', 'App\Http\Controllers\Api\PatientController@myReport');

});

Route::group(['middleware' => ['api','auth:pharmacy'], 'prefix' => 'pharmacy'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\PharmacyController@login')->withoutMiddleware('auth:pharmacy');
    Route::post('register', 'App\Http\Controllers\Api\PharmacyController@register')->withoutMiddleware('auth:pharmacy');
    Route::post('logout', 'App\Http\Controllers\Api\PharmacyController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\PharmacyController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\PharmacyController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\PharmacyController@edit');
    Route::post('addProducts', 'App\Http\Controllers\Api\PharmacyController@addProducts');
    Route::post('show/{pharmacy_id}', 'App\Http\Controllers\Api\PharmacyController@show');
    Route::delete('destroy/{pharmacy_id}', 'App\Http\Controllers\Api\PharmacyController@destroy');
    Route::post('addProductImages', 'App\Http\Controllers\Api\PharmacyController@addProductImages');

});

Route::group(['middleware' => ['api','auth:lab'], 'prefix' => 'lab'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\LabController@login')->withoutMiddleware('auth:lab');
    Route::post('register', 'App\Http\Controllers\Api\LabController@register')->withoutMiddleware('auth:lab');
    Route::post('logout', 'App\Http\Controllers\Api\LabController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\LabController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\LabController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\LabController@edit');
    Route::post('show/{lab_id}', 'App\Http\Controllers\Api\LabController@show');
    Route::post('addSample', 'App\Http\Controllers\Api\LabController@addSample');
    Route::post('destroy/{lab_id}', 'App\Http\Controllers\Api\LabController@destroy');
    Route::post('ourReply', 'App\Http\Controllers\Api\LabController@ourReply');

});

Route::group(['middleware' => ['api','auth:admin'], 'prefix' => 'WorkTime'], function ($router) {

    Route::post('add', 'App\Http\Controllers\workTimeController@add');
    Route::post('show/{Work_time_id}', 'App\Http\Controllers\workTimeController@show');
    Route::post('edit/{work_time_id}', 'App\Http\Controllers\workTimeController@edit');
    Route::post('destroy/{work_time_id}', 'App\Http\Controllers\workTimeController@destroy');

});
