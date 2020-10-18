<?php

use Illuminate\Support\Facades\Route;
use Pkg\EasyCms\Admin\Main\Http\Controllers\MainController;
use Pkg\EasyCms\Admin\Main\Http\Controllers\Settings\LocalesController;
use Pkg\EasyCms\Admin\Main\Http\Controllers\Settings\SettingsController;
use Pkg\EasyCms\Admin\Main\Http\Controllers\User\RoleController;
use Pkg\EasyCms\Admin\Main\Http\Controllers\User\UserController;

Route::get('', function () {
    return redirect(\route('admin.information'));
});

Route::get('/information', [MainController::class, 'index'])->name('admin.information');

/**
 * Settings
 */
Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
Route::get('/settings/main/site', [SettingsController::class, 'index'])->name('admin.settings.main.site');

Route::get('/settings/main/locales', [LocalesController::class, 'index'])->name('admin.settings.main.locales');

Route::get('/settings/users', [UserController::class, 'index'])->name('admin.settings.user');

Route::get('/settings/roles', [RoleController::class, 'index'])->name('admin.settings.role');




