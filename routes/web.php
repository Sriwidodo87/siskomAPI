<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
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
// jika ada kode diatas tidak akan bisa membuat generate pdf

// Route::get('generate-pdf', [DistribusiController::class, 'generatePDF'])->name('generatePDF');
Route::get('generate-pdf/{id}',[DistribusiController::class, 'generatePDF'])->name('generatePDF');
Route::get('upload_file-pdf/{id}',[DistribusiController::class, 'upload_file'])->name('upload_file');
Route::post('distribusi/update_upload/{id}',[DistribusiController::class, 'update_upload'])->name('distribusi.update_upload');
// Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('distribusi/viewPdf/{id}',[DistribusiController::class, 'viewPdf'])->name('distribusi.viewPdf');
