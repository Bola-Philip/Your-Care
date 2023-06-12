<?php

use App\Http\Controllers\Api\Admin\InsuranceCompanyController;
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


Route::get('insurance_company',[InsuranceCompanyController::class ,'index']);
Route::post('insurance_company/add',[InsuranceCompanyController::class ,'store']);
Route::put('insurance_company/update',[InsuranceCompanyController::class ,'update']);
Route::get('insurance_company/show',[InsuranceCompanyController::class ,'show']);
Route::delete('insurance_company/destory',[InsuranceCompanyController::class ,'destroy']);
Route::add('addPatient/add',[InsuranceCompanyController::class ,'add']);
Route::delete('removePatient/remove',[InsuranceCompanyController::class ,'remove']);
