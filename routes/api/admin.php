<?php


use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['api', 'checkToken:admin'], 'prefix' => 'center'], function ($router) {
    Route::post('save', '\App\Http\Controllers\Api\Admin\CenterController@store')->withoutMiddleware('checkToken:admin');
    Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\CenterController@show');
    Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\CenterController@update');
    Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\CenterController@destroy');

    Route::group(['middleware' => ['api'], 'prefix' => 'admin'], function ($router) {
        Route::post('login', 'App\Http\Controllers\Api\Admin\AdminController@login')->withoutMiddleware('checkToken:admin')->name('admin.login');
        Route::post('save', 'App\Http\Controllers\Api\Admin\AdminController@register');
        Route::post('logout', 'App\Http\Controllers\Api\Admin\AdminController@logout');
        Route::post('refresh', 'App\Http\Controllers\Api\Admin\AdminController@refresh');
        Route::post('myData', 'App\Http\Controllers\Api\Admin\AdminController@myData');

        Route::group(['middleware' => ['api'], 'prefix' => 'department'], function ($router) {
            Route::post('save', '\App\Http\Controllers\Api\Admin\CenterController@createDepartment');
        });
        Route::group(['middleware' => ['api'], 'prefix' => 'insuranceCompany'], function ($router) {
            Route::post('save', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@store');
        });
        Route::group(['middleware' => ['api'], 'prefix' => 'client'], function ($router) {
            Route::post('save', 'App\Http\Controllers\Api\Admin\ClientController@store')->withoutMiddleware('checkToken:admin');
            Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\ClientController@show')->withoutMiddleware('checkToken:admin');
            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\ClientController@update')->withoutMiddleware('checkToken:admin');
            Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\ClientController@destroy')->withoutMiddleware('checkToken:admin');
        });
        Route::group(['middleware' => ['api'], 'prefix' => 'expense'], function ($router) {
            Route::post('save', '\App\Http\Controllers\Api\Admin\ExpenseController@store')->withoutMiddleware('checkToken:admin');
            Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@show')->withoutMiddleware('checkToken:admin');
            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@update')->withoutMiddleware('checkToken:admin');
            Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@destroy')->withoutMiddleware('checkToken:admin');
        });
    });
});
