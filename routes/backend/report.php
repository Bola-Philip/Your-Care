<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('report/create', 'App\Http\Controllers\ReportController@create')->name('report.create');
Route::post('report/store', 'App\Http\Controllers\ReportController@store')->name('report.store');


