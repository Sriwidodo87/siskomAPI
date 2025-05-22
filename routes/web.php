<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DistribusiController;
// Route::get('/', function () {
//     // return view('welcome');
//     return view('home');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Route::get('/distribusi', [DistribusiController::class, 'index'])->name('distribusi');
Route::get('/distribusi/create', [DistribusiController::class, 'create'])->name('distribusi.create');

*/

Route::resource('/distribusi', App\Http\Controllers\DistribusiController::class,['names' => 'distribusi']);



