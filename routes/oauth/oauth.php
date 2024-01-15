<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\oauth\oauthController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', [oauthController::class, 'index'])->name('index');
Route::get('/auth/redirect', [oauthController::class, 'redirect'])->name('redirect');

Route::get('/auth/callback', [oauthController::class, 'callback'])->name('callback');
