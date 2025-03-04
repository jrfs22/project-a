<?php

use App\Http\Controllers\JosepController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index'])->middleware('guest');
    Route::get('create', [ProductController::class, 'create'])->middleware('guest');

});

Route::get('josep', [JosepController::class, 'index']);

