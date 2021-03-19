<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\aboutController::class, 'about']);
Route::get('/profile', [App\Http\Controllers\profileController::class, 'profile']);
Route::get('/contact', [App\Http\Controllers\contactController::class, 'contact']);
