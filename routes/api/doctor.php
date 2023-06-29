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

    Route::get('categories', 'App\Http\Controllers\Api\DoctorController@doctorCategories')->withoutMiddleware('auth:doctor');
    Route::get('new', 'App\Http\Controllers\Api\DoctorController@newRequest')->withoutMiddleware('auth:doctor');

    Route::post('login', 'App\Http\Controllers\Api\DoctorController@login')->withoutMiddleware('auth:doctor')->name('doctor.login');
    Route::post('register', 'App\Http\Controllers\Api\DoctorController@register')->withoutMiddleware('auth:doctor');
    Route::post('logout', 'App\Http\Controllers\Api\DoctorController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\DoctorController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\DoctorController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\DoctorController@update');
    Route::post('show/{id}', 'App\Http\Controllers\Api\DoctorController@show');
    Route::post('experience/{id}', 'App\Http\Controllers\Api\DoctorController@experience');
    Route::post('myReports/add', 'App\Http\Controllers\Api\DoctorController@addReport');
    Route::post('myReports', 'App\Http\Controllers\Api\DoctorController@myReports');
    Route::post('patientTakeService', 'App\Http\Controllers\Api\DoctorController@patientTakeService');
    Route::post('myBookRequests', 'App\Http\Controllers\Api\DoctorController@myBooks');
    Route::post('addBookingRate/{id}', 'App\Http\Controllers\Api\DoctorController@rateBooking');
    Route::post('delete/{id}', 'App\Http\Controllers\Api\DoctorController@delete');
    Route::post('deleteMyAccount', 'App\Http\Controllers\Api\DoctorController@destroy');
    Route::post('addAds', 'App\Http\Controllers\Api\DoctorController@addAds');
});


//                        ==============Show Doctors===========
Route::group(['middleware' => ['api'], 'prefix' => 'doctors'], function ($router) {
Route::get('all', 'App\Http\Controllers\Api\DoctorController@allDoctors');
Route::get('favorite', 'App\Http\Controllers\Api\DoctorController@favoriteDoctors');
Route::get('rated', 'App\Http\Controllers\Api\DoctorController@ratedDoctors');
Route::get('all/{category}', 'App\Http\Controllers\Api\DoctorController@doctorsByCategory');
Route::get('favorite/{category}', 'App\Http\Controllers\Api\DoctorController@favoriteDoctorsByCategories');
Route::get('rated/{category}', 'App\Http\Controllers\Api\DoctorController@ratedDoctorsByCategory');
});
