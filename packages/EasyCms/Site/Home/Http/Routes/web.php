<?php

use Illuminate\Support\Facades\Route;
use Pkg\EasyCms\Site\Home\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);

