<?php

use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => 'enginx'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('Home');

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('Product.index');
        Route::get('/{id}', [ProductController::class, 'show'])->name('Product.show');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('Category.index');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('Category.show');
        Route::get('/{id}/sub_category/{sub_id}', [CategoryController::class, 'show_sub_category'])->name('Sub_Category.Show');
    });
    Route::group(['prefix' => 'jobs'], function () {
        Route::get('/', [\App\Http\Controllers\Front\JobController::class, 'index'])->name('MyJops');
        Route::get('/show/{id}', [\App\Http\Controllers\Front\JobController::class, 'show'])->name('show');
        Route::post('/store', [\App\Http\Controllers\Front\ApplicantController::class, 'store'])->name('store');
    });
});