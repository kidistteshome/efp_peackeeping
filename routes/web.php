<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\File\FileController;
Route::get('/', function () {
    auth()->logout();
    return 'logged out';
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [MainController::class, 'index'])->name('layout.home');


Route::get('/download/{file}', [FileController::class, 'download']);
Route::get('change_password', [MainController::class, 'change_password'])->name('change.password');
Route::post('change_password', [MainController::class, 'password_change'])->name('password.change');

Route::middleware(auth::class)->group(function () {
Route::get('/documents', [FileController::class, 'index'])->name('document.upload');
Route::post('/file', [FileController::class, 'upload'])->name('file.upload');
Route::get('/show', [FileController::class, 'show'])->name('show.documents');


});
