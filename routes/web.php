<?php

use Illuminate\Support\Facades\Route;

Route::view('admin/{any}', 'singleApp')->where('any', '.*');

Route::prefix('api')->group(function (){
    Route::resource('categoies', \App\Http\Controllers\CategoryController::class);
    Route::resource('sub_categoies', \App\Http\Controllers\SubCategoryController::class);
});