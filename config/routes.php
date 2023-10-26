<?php

use App\Controllers;
use App\Kernel\Router\Route;

return [
    Route::get('/', [Controllers\HomeController::class, 'index']),
    Route::get('/galleries', [Controllers\GalleryController::class, 'index']),
    Route::get('/gallery', [Controllers\GalleryController::class, 'show']),
    Route::get('/admin/images/add', [Controllers\ImageController::class, 'add']),
    Route::post('/admin/images/add', [Controllers\ImageController::class, 'store']),
    Route::get('/register', [Controllers\RegisterController::class, 'index']),
    Route::post('/register', [Controllers\RegisterController::class, 'register']),
    Route::get('/login', [Controllers\LoginController::class, 'index']),
    Route::post('/login', [Controllers\LoginController::class, 'login']),
    Route::post('/logout', [Controllers\LoginController::class, 'logout']),
];
