<?php
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/komputers', App\Http\Controllers\Api\KomputerController::class);
Route::apiResource('/kategori', App\Http\Controllers\Api\KategoriController::class);
