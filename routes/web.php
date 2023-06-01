<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(clientController::class)->group(function(){
    Route::post('new', 'create')->name('client.create');
    Route::post('save', 'store')->name('client.store');
    Route::post('edit', 'edit')->name('client.edit');
    Route::post('update', 'update')->name('client.update');
    Route::post('delete', 'delete')->name('client.delete');
});
