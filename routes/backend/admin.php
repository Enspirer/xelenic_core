<?php

use App\Http\Controllers\Backend\DashboardController;
use  App\Http\Controllers\Backend\BlogController;
use  App\Http\Controllers\Backend\PagesController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::post('blog/upload_images', [BlogController::class, 'upload_image'])->name('upload_images');

Route::get('pages', [PagesController::class, 'index'])->name('pages');

Route::get('blog/delete', [PagesController::class, 'delete'])->name('blog.delete');
Route::post('blog/insert', [BlogController::class, 'insert'])->name('blog.insert');
Route::post('blog/update', [BlogController::class, 'edit'])->name('blog.edit');
