<?php

use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('Home');

Route::group(["prefix" => 'enginx'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('Home');

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('Product.index');
        Route::get('/{id}', [ProductController::class, 'show'])->name('Product.show');
        Route::get('/search/{id}', [ProductController::class, 'search'])->name('Search');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('Category.index');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('Category.show');
        Route::get('/{id}/sub_category/{sub_id}', [CategoryController::class, 'show_sub_category'])->name('Sub_Category.Show');
    });
});

Route::get(
    '/who',
    function () {
        return view('front.footer.who');
    }
)->name('who');
