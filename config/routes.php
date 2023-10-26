<?php

use App\Controllers;
use App\Kernel\Router\Route;

return [
    Route::get('/', [Controllers\HomeController::class, 'index']),
    Route::get('/galleries', [Controllers\GalleryController::class, 'index']),
    Route::get('/gallery', [Controllers\GalleryController::class, 'show']),
    Route::get('/admin/images/add', [Controllers\ImageController::class, 'add']),
    Route::post('/admin/images/add', [Controllers\ImageController::class, 'store']),
    Route::get('/register', [Controllers\RegisterCintroller::class, 'index']),
    Route::post('/register', [Controllers\RegisterCintroller::class, 'register']),
];
