<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('/user', UserController::class);

Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
Route::put('/setting/{setting}/update', [SettingController::class, 'update'])->name('setting.update');
