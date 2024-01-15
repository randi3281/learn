<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\middleware\middlewareController;

Route::get('/', [middlewareController::class, 'index']);
Route::get('/about', [middlewareController::class, 'about']);
Route::get('/product', [middlewareController::class, 'product']);
Route::get('/cart', [middlewareController::class, 'cart']);
Route::get('/order', [middlewareController::class, 'order'])->name('order');
Route::get('/cektanggal', [middlewareController::class, 'cektanggal'])->middleware('ordermiddleware');
