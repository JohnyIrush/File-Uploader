<?php

use App\Http\Controllers\UI\UIController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

use App\Http\Controllers\User\UserManagerController;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\Settings\SettingsController;

use App\Http\Controllers\User\Task\TaskController;

use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Storage;

Route::get('/', [UIController::class, 'login'])->name('/');

Route::get('/dashboard', [UIController::class, 'dashboard'])->name('dashboard');


Route::get('/file-manager', [UIController::class, 'fileManager'])->name('file-manager');

Route::get('/user-manager', [UserManagerController::class, 'userManager'])->name('user-manager');

Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');


Route::get('/settings', [SettingsController::class, 'settings'])->name('settings');

Route::get("task", [TaskController::class, "task"])->name('task');


Route::get('/folders/paths', function(){
    return Storage::allDirectories('/');
});
