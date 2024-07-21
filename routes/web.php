<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


    Route::get('/dashboard/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
});