<?php

use App\Http\Controllers\Backend\DashboardController;
use  App\Http\Controllers\Backend\BlogController;
use  App\Http\Controllers\Backend\PagesController;
use  App\Http\Controllers\Backend\PartnershipsController;
use App\Http\Controllers\Backend\CloudServiceController;
// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::post('blog/upload_images', [BlogController::class, 'upload_image'])->name('upload_images');
Route::post('blog/insert', [BlogController::class, 'create'])->name('create');
Route::get('blog/delete/{id}', [BlogController::class, 'delete'])->name('delete');

Route::get('pages', [PagesController::class, 'index'])->name('pages');

Route::get('partnerships', [PartnershipsController::class, 'index'])->name('partnerships');

Route::get('cloud-services', [CloudServiceController::class, 'index'])->name('cloud_service');
Route::post('cloud-services/insert', [CloudServiceController::class, 'insert'])->name('cloud_service.insert');
