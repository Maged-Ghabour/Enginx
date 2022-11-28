<?php

use App\Http\Controllers\Dashboard\AdminAuthController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\dashboard\jobController;
use App\Http\Controllers\dashboard\OfferController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\CustomerController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin-dashboard'], function () {
    Route::group(['middleware' => 'adminRedirect:admin'], function () {
        Route::get('/login', [AdminAuthController::class, 'login'])->name('Admin.Login');
        Route::post('/confirm', [AdminAuthController::class, 'confirm'])->name('Admin.confirm');
    });
    Route::group(["middleware" => ["adminAuth:admin"], "as" => "dashboard."], function () {
        Route::get("/", [DashboardController::class, "index"])->name('Admin.index');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('Admin.Logout');
        Route::resource("/categories", CategoryController::class);
        Route::resource("/products", ProductController::class);
        Route::resource("/users", UserController::class);
        Route::resource("/offers", OfferController::class);
        Route::resource("/jobs", jobController::class);
        Route::resource("/ourCustomers", CustomerController::class);
    });
});
