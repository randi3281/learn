<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\randomController;


Route::get('/', [randomController::class, 'index']);
