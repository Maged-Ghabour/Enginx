<?php

use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/{id}', [\App\Http\Controllers\Front\ProfileController::class, 'show'])->name('profile');
        Route::get('/edit_name/{id}', [\App\Http\Controllers\Front\ProfileController::class, 'edit_name'])->name('profile.edit_name');
        Route::get('/edit_email/{id}', [\App\Http\Controllers\Front\ProfileController::class, 'edit_email'])->name('profile.edit_email');
        Route::get('/edit_phone/{id}', [\App\Http\Controllers\Front\ProfileController::class, 'edit_phone'])->name('profile.edit_phone');
        Route::put('/update/{id}', [\App\Http\Controllers\Front\ProfileController::class, 'update'])->name('profile.updateing');
    });
});

Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');


/* Start Cart Route */
Route::group(["prefix" => 'enginx'], function () {
    Route::resource('cart', CartController::class);
});


/* End Cart Route  */


/* Start Order Route */
Route::group(["prefix" => 'enginx'], function () {
    Route::get('checkout', [CheckoutController::class, "create"])->name("checkout");
    Route::post('checkout', [CheckoutController::class, "store"]);
});


/* End Order Route  */



require __DIR__ . '/auth.php';

require __DIR__ . '/front.php';
require __DIR__ . '/dashboard.php';