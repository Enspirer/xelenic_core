<?php

use App\Http\Controllers\Backend\DashboardController;
use  App\Http\Controllers\Backend\BlogController;
use  App\Http\Controllers\Backend\PagesController;
use  App\Http\Controllers\Backend\PartnershipsController;
use App\Http\Controllers\Backend\CloudServiceController;
use App\Http\Controllers\Backend\SettingsController;
// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::post('blog/upload_images', [BlogController::class, 'upload_image'])->name('upload_images');
Route::post('blog/insert', [BlogController::class, 'create'])->name('create');
Route::post('blog/update', [BlogController::class, 'update'])->name('blog.update');

Route::get('blog/edit/{blog_id}', [BlogController::class, 'edit_blog'])->name('edit_blog');
Route::get('blog/delete/{id}', [BlogController::class, 'delete'])->name('delete');

Route::get('pages', [PagesController::class, 'index'])->name('pages');

Route::get('partnerships', [PartnershipsController::class, 'index'])->name('partnerships');

Route::get('cloud-services', [CloudServiceController::class, 'index'])->name('cloud_service');

Route::get('settings', [SettingsController::class, 'index'])->name('settings');
Route::post('settings/save-settings/homepage', [SettingsController::class, 'store'])->name('settings.home_page.save');
Route::post('settings/save-settings/save_features_data', [SettingsController::class, 'save_features_data'])->name('settings.home_page.save_features_data.save');
Route::post('settings/save-settings/save_basic_settings', [SettingsController::class, 'save_main_settings'])->name('settings.home_page.save_main_settings.save');

Route::post('cloud-services/insert', [CloudServiceController::class, 'insert'])->name('cloud_service.insert');


