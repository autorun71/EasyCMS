<?php

use Illuminate\Support\Facades\Route;
use Pkg\EasyCms\Admin\Main\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'index']);

