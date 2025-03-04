<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index'])->middleware('guest');
    Route::get('create', [ProductController::class, 'create'])->middleware('guest');

});


// /product/create : C
// /product : R
// /product/edit : U => tampilan
// /product/update : U => proses
// /product/delete : D
