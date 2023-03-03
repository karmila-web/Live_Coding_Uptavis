<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\DataClubController;


Auth::routes();

Route::get('/', [App\Http\Controllers\SkorController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\SkorController::class, 'index'])->name('home');

Route::resource('/tampilan-klasemen', DataClubController::class);

Route::resource('/menu-inputskor', SkorController::class);
