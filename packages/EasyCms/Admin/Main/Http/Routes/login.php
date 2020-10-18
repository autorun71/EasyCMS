<?php

use Illuminate\Support\Facades\Route;
use Pkg\EasyCms\Admin\Main\Http\Controllers\Auth\LoginController;


//Route::get('/', [MainController::class, 'index'])->name('admin.index');
Route::get('/login', [LoginController::class, 'index'])->name('admin.login');


//Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login']);

