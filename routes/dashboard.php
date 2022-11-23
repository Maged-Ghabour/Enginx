<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\dashboard\jobController;
use App\Http\Controllers\dashboard\OfferController;
use App\Http\Controllers\dashboard\OurCustomersController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;



Route::group([
    "middleware" => ["auth"],
    "as" => "dashboard.",
    "prefix" => "dash"

], function () {
    Route::get("/", [DashboardController::class, "index"]);
    Route::resource("/categories", CategoryController::class);
    Route::resource("/products", ProductController::class);
    Route::resource("/users", UserController::class);
    Route::resource("/offers", OfferController::class);
    Route::resource("/jobs", jobController::class);
    Route::resource("/ourCustomers", OurCustomersController::class);
});