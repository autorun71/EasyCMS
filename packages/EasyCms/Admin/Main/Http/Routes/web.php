<?php

use Illuminate\Support\Facades\Route;
use Pkg\EasyCms\Admin\Main\Http\Controllers\MainController;
use Pkg\EasyCms\Admin\Main\Http\Controllers\Settings\SettingsController;

Route::get('', function () {
    return redirect(\route('admin.information'));
});
Route::get('/information', [MainController::class, 'index'])->name('admin.information');
Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');




