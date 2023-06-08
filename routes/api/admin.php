<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['api', 'auth:admin'], 'prefix' => 'center'], function ($router) {
    Route::post('new', '\App\Http\Controllers\Api\CenterController@store')->withoutMiddleware('auth:admin');
    Route::post('show/{id}', '\App\Http\Controllers\Api\CenterController@show')->withoutMiddleware('auth:admin');
    Route::post('update/{id}', '\App\Http\Controllers\Api\CenterController@update');
    Route::post('delete/{id}', '\App\Http\Controllers\Api\CenterController@destroy');
});
Route::group(['middleware' => ['api', 'auth:admin'], 'prefix' => 'department'], function ($router) {
    Route::post('new', '\App\Http\Controllers\Api\CenterController@createDepartment');
});

Route::post('insuranceCompany/store', '\App\Http\Controllers\Api\InsuranceCompanyController@store');
