<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Distribusi;
// Route::get('/', function () {
//     // return view('welcome');
//     return view('home');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/distribusi', App\Http\Controllers\Distribusi::class, ['names' => 'distribusi']);
Route::resource('distribusi', Distribusi::class);
