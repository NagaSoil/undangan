<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.action');

Route::get('/undangan', function(){
    return view('Layout/undangan');
});

Route::middleware('auth')->group( function() {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/admin', [AdminController::class, 'welcome']);
    Route::get('/admin/welcome', [AdminController::class, 'welcome'])->name('welcome');
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/undangan', [AdminController::class, 'index'])->name('admin.undangan');



});


