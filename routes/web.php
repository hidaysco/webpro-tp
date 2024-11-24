<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/show', [UserController::class, 'show'])->name('users.show');
});
