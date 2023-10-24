<?php

use App\Router\Route;
use App\Controllers;

return [
    Route::get('/', [Controllers\HomeController::class, 'index']),
    Route::get('/galleries', [Controllers\GalleryController::class, 'index']),
    Route::get('/gallery', [Controllers\GalleryController::class, 'show']),
    Route::get('/test', function (){
        echo 'test';
    }),
];
