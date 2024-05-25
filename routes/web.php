<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/login', [UserController::class, 'login'])->name('login'); 

Route::get('/register', [UserController::class, 'register'])->name('register'); 

Route::post('registervalidate', [UserController::class, 'registervalidate'])->name('registervalidate');

Route::post('loginvalidate', [UserController::class, 'loginvalidate'])->name('loginvalidate');

Route::get('order', [OrderController::class, 'index'])->name('order');

Route::resource('order', OrderController::class);


