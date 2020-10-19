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
Route::get('/settings/users/edit/{id}', [UserController::class, 'edit'])->name('admin.settings.user.edit');
Route::put('/settings/users/edit/{id}', [UserController::class, 'update'])->name('admin.settings.user.update');
Route::get('/settings/users/create', [UserController::class, 'create'])->name('admin.settings.user.create');
Route::post('/settings/users/create', [UserController::class, 'store'])->name('admin.settings.user.store');
Route::post('/settings/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.settings.user.delete');

Route::get('/settings/roles', [RoleController::class, 'index'])->name('admin.settings.role');




