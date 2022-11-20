<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;



Route::group([
    "middleware" => ["auth"] ,
    "as" => "dashboard." ,
    "prefix" => "dash"

], function(){
    Route::get("/" , [DashboardController::class , "index"]);
    Route::resource("/categories" , CategoryController::class);
    Route::resource("/products" , CategoryController::class);
});
