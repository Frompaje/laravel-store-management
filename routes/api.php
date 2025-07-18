<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(UserController::class)->group(function () {
    Route::post('/users', 'create');
});


Route::controller(ProductController::class)->group(function () {
    Route::post('/products', 'create');
});
