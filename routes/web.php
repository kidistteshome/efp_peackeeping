<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [MainController::class, 'index'])->name('home');
