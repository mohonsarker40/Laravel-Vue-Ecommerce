<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [\App\Http\Controllers\LoginController::class,'login'] )->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'doLogin'] );
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'] );


Route::view('admin/{any}', 'singleApp')->where('any', '.*')->middleware('auth');

Route::prefix('api')->middleware('auth')->group(function (){
    Route::post('required_data', [\App\Http\Controllers\SupportController::class, 'requiredData']);
    Route::get('configurations', [\App\Http\Controllers\SupportController::class, 'getConfigurations']);
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboardData']);

    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('sub_categories', \App\Http\Controllers\SubCategoryController::class);
});