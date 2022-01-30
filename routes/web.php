<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {
    
    
    Route::get('/checkout/success', [App\Http\Controllers\CheckoutController::class, 'success'])
    ->name('checkout.success');

    Route::get('/checkout/cancelled', [App\Http\Controllers\CheckoutController::class, 'cancelled'])
    ->name('checkout.cancelled');

    Route::get('/checkout/{product}', [App\Http\Controllers\CheckoutController::class, 'show'])
    ->name('checkout');


});
