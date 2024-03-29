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
Route::get('login', 'App\Http\Controllers\Controller@login');
Route::post('check', 'App\Http\Controllers\Api\Admin\AdminController@login')->name('login');
Route::get('newForm', 'App\Http\Controllers\Controller@newForm');
Route::post('saveForm', 'App\Http\Controllers\Controller@storeForm')->name('upload.pdf');

Route::get('show-pdf', function () {
    $path = public_path('images/forms/pdf/1686758810.docx');
    return response()->file($path);
});



