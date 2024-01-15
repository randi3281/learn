<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\oauth\oauthController;

Route::get('/', [oauthController::class, 'index'])->name('index');
