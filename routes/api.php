<?php

use App\Http\Controllers\clientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

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




Route::group(['middleware' => ['api','auth:admin'], 'prefix' => 'WorkTime'], function ($router) {
    Route::post('add', 'App\Http\Controllers\Api\WorkTimeController@add');
    Route::post('show/{Work_time_id}', 'App\Http\Controllers\Api\WorkTimeController@show');
    Route::post('edit/{work_time_id}', 'App\Http\Controllers\Api\WorkTimeController@edit');
    Route::post('destroy/{work_time_id}', 'App\Http\Controllers\Api\WorkTimeController@destroy');

});
