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

Route::group(['middleware' => ['api', 'auth:patient'], 'prefix' => 'patient'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\PatientController@login')->withoutMiddleware('auth:patient')->name('patient.login');
    Route::post('register', 'App\Http\Controllers\Api\PatientController@register')->withoutMiddleware('auth:patient');
    Route::post('logout', 'App\Http\Controllers\Api\PatientController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\PatientController@refresh');
    Route::post('myData', 'App\Http\Controllers\Api\PatientController@myData');
    Route::post('edit', 'App\Http\Controllers\Api\PatientController@update');
    Route::post('bookingRequest/{patient_id}', 'App\Http\Controllers\Api\PatientController@bookingRequest');
    Route::post('myReports', 'App\Http\Controllers\Api\PatientController@myReports');
    Route::post('delete/{id}', 'App\Http\Controllers\Api\PatientController@delete');
    Route::post('deleteMyAccount', 'App\Http\Controllers\Api\PatientController@destroy');
    Route::post('displayAds', 'App\Http\Controllers\Api\PatientController@displayAds');

    Route::group(['prefix'=>'disease'], function($router){
        Route::post('add', 'App\Http\Controllers\Api\PatientController@addDisease');
        Route::post('addMedia/{id}', 'App\Http\Controllers\Api\PatientController@addDiseaseMedia');
        Route::post('delete/{id}', 'App\Http\Controllers\Api\PatientController@deleteDisease');
        Route::post('deleteMedia/{id}', 'App\Http\Controllers\Api\PatientController@deleteDiseaseMedia');
    });

    Route::group(['prefix'=>'favorites'], function($router){
        Route::post('all', 'App\Http\Controllers\Api\PatientController@myFavorites');
        Route::post('addCenter/{id}', 'App\Http\Controllers\Api\PatientController@addCenterToFavorite');
        Route::post('addDoctor/{id}', 'App\Http\Controllers\Api\PatientController@addDoctorToFavorite');
        Route::post('addPharmacy/{id}', 'App\Http\Controllers\Api\PatientController@addPharmacyToFavorite');
        Route::post('addLab/{id}', 'App\Http\Controllers\Api\PatientController@addLabToFavorite');
        Route::post('removeCenter/{id}', 'App\Http\Controllers\Api\PatientController@removeCenterFromFavorite');
        Route::post('removeDoctor/{id}', 'App\Http\Controllers\Api\PatientController@removeDoctorFromFavorite');
        Route::post('removePharmacy/{id}', 'App\Http\Controllers\Api\PatientController@removePharmacyFromFavorite');
        Route::post('removeLab/{id}', 'App\Http\Controllers\Api\PatientController@removeLabFromFavorite');
    });

        Route::post('myRatings', 'App\Http\Controllers\Api\PatientController@myRates');
        Route::post('rateCenter/{id}', 'App\Http\Controllers\Api\PatientController@addRateToCenter');
        Route::post('rateDoctor/{id}', 'App\Http\Controllers\Api\PatientController@addRateToDoctor');
        Route::post('ratePharmacy/{id}', 'App\Http\Controllers\Api\PatientController@addRateToPharmacy');
        Route::post('rateLab/{id}', 'App\Http\Controllers\Api\PatientController@addRateToLab');
        Route::post('removeCenterRating/{id}', 'App\Http\Controllers\Api\PatientController@removeRateFromCenter');
        Route::post('removeDoctorRating/{id}', 'App\Http\Controllers\Api\PatientController@removeRateFromDoctor');
        Route::post('removePharmacyRating/{id}', 'App\Http\Controllers\Api\PatientController@removeRateFromPharmacy');
        Route::post('removeLabRating/{id}', 'App\Http\Controllers\Api\PatientController@removeRateFromLab');

    });
