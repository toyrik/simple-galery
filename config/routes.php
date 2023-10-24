<?php

use App\Router\Route;

return [
    Route::get('/', function (){
        return include_once APP_PATH . '/views/pages/home.php';
    }),
    Route::get('/galleries', function (){
        return include_once APP_PATH . '/views/pages/galleries.php';
    }),
    Route::get('/gallery', function (){
        return include_once APP_PATH . '/views/pages/gallery.php';
    }),
    Route::post('/gallery', function (){
        return include_once APP_PATH . '/views/pages/gallery.php';
    }),
];
