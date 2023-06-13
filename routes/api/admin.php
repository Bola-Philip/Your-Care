<?php


use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['api', 'checkToken:admin'], 'prefix' => 'center'], function ($router) {
    Route::post('save', '\App\Http\Controllers\Api\Admin\CenterController@store')->withoutMiddleware('checkToken:admin');
    Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\CenterController@show');
    Route::post('update', '\App\Http\Controllers\Api\Admin\CenterController@update');
    Route::post('delete', '\App\Http\Controllers\Api\Admin\CenterController@delete');
    Route::post('myData', '\App\Http\Controllers\Api\Admin\CenterController@myData');

    Route::group(['middleware' => ['api'], 'prefix' => 'admin'], function ($router) {
        Route::post('login', 'App\Http\Controllers\Api\Admin\AdminController@login')->withoutMiddleware('checkToken:admin')->name('admin.login');
        Route::post('save', 'App\Http\Controllers\Api\Admin\AdminController@register');
        Route::post('logout', 'App\Http\Controllers\Api\Admin\AdminController@logout');
        Route::post('refresh', 'App\Http\Controllers\Api\Admin\AdminController@refresh');
        Route::post('myData', 'App\Http\Controllers\Api\Admin\AdminController@myData');
        Route::post('show/{id}', 'App\Http\Controllers\Api\Admin\AdminController@show');
        Route::post('update/{id}', 'App\Http\Controllers\Api\Admin\AdminController@update');
        Route::post('delete/{id}', 'App\Http\Controllers\Api\Admin\AdminController@delete');

        Route::group(['middleware' => ['api'], 'prefix' => 'department'], function ($router) {
            Route::post('save', '\App\Http\Controllers\Api\Admin\CenterController@createDepartment');
            Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\CenterController@showDepartment');
            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\CenterController@updateDepartment');
            Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\CenterController@deleteDepartment');
        });
        Route::group(['middleware' => ['api'], 'prefix' => 'service'], function ($router) {
            Route::post('save', '\App\Http\Controllers\Api\Admin\CenterController@createService');
            Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\CenterController@showService');
            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\CenterController@updateService');
            Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\CenterController@deleteService');
        });
        Route::group(['middleware' => ['api'], 'prefix' => 'Invoice'], function ($router) {
            Route::post('save', '\App\Http\Controllers\Api\Admin\InvoiceController@store');
            Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\InvoiceController@show');
//            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\InvoiceController@update');
            Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\InvoiceController@destroy');
        });

        Route::group(['middleware' => ['api'], 'prefix' => 'insuranceCompany'], function ($router) {
            Route::post('save', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@store');
            Route::post('addPatient', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@addPatient');
            Route::post('removePatient/{id}', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@removePatient');

        });
        Route::group(['middleware' => ['api'], 'prefix' => 'client'], function ($router) {
            Route::post('save', 'App\Http\Controllers\Api\Admin\ClientController@store');
            Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\ClientController@show');
            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\ClientController@update');
            Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\ClientController@destroy');
        });

        Route::group(['prefix' => 'employee'], function ($router) {
            Route::post('save', 'App\Http\Controllers\Api\Admin\EmployeeController@store');
            Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\EmployeeController@show');
            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\EmployeeController@update');
            Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\EmployeeController@destroy');
        });

        Route::group(['middleware' => ['api'], 'prefix' => 'expense'], function ($router) {
            Route::post('save', '\App\Http\Controllers\Api\Admin\ExpenseController@store');
            Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@show');
            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@update');
            Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@destroy');
        });




    });
});
