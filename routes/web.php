<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\DataClubController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\SkorController::class, 'index'])->name('home');

// Route::get('/tampilan-klasemen', [App\Http\Controllers\DataClubController::class, 'index'])->name('tampilan-klasemen');

Route::resource('/tampilan-klasemen', DataClubController::class);

Route::resource('/menu-inputskor', SkorController::class);
