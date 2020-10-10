<?php
use App\Http\Controllers\CommonFunctions\ServiceImagesController;



Route::get('/service_images/{images}', [ServiceImagesController::class, 'index'])->name('service_img_route');


;