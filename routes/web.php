<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/account/login',[LoginController::class,'index'])->name('account.login');
Route::get('/account/register',[LoginController::class,'register'])->name('account.register');
Route::post('/account/process-register',[LoginController::class,'processRegister'])->name('account.processRegister');

Route::post('/account/authenticate',[LoginController::class,'authenticate'])->name('account.authenticate');
Route::get('/account/home',[HomeController::class,'index'])->name('account.home');
