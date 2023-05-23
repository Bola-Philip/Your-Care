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

});

Route::group(['middleware' => ['api','auth:patient'], 'prefix' => 'patient'], function ($router) {

    Route::post('login', 'App\Http\Controllers\patientController@login')->withoutMiddleware('auth:patient');
    Route::post('register', 'App\Http\Controllers\patientController@register')->withoutMiddleware('auth:patient');
    Route::post('logout', 'App\Http\Controllers\patientController@logout');
    Route::post('refresh', 'App\Http\Controllers\patientController@refresh');
    Route::post('myData', 'App\Http\Controllers\patientController@myData');

});

Route::group(['middleware' => ['api','auth:pharmacy'], 'prefix' => 'pharmacy'], function ($router) {

    Route::post('login', 'App\Http\Controllers\pharmacyController@login')->withoutMiddleware('auth:pharmacy');
    Route::post('register', 'App\Http\Controllers\pharmacyController@register')->withoutMiddleware('auth:pharmacy');
    Route::post('logout', 'App\Http\Controllers\pharmacyController@logout');
    Route::post('refresh', 'App\Http\Controllers\pharmacyController@refresh');
    Route::post('myData', 'App\Http\Controllers\pharmacyController@myData');

});

Route::group(['middleware' => ['api','auth:lab'], 'prefix' => 'lab'], function ($router) {

    Route::post('login', 'App\Http\Controllers\labController@login')->withoutMiddleware('auth:lab');
    Route::post('register', 'App\Http\Controllers\labController@register')->withoutMiddleware('auth:lab');
    Route::post('logout', 'App\Http\Controllers\labController@logout');
    Route::post('refresh', 'App\Http\Controllers\labController@refresh');
    Route::post('myData', 'App\Http\Controllers\labController@myData');

});
