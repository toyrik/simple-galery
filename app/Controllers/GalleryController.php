<?php

namespace App\Controllers;

class GalleryController
{
    public function index(): void
    {
        include_once APP_PATH . '/views/pages/galleries.php';
    }

    public function show(): void
    {
        include_once APP_PATH . '/views/pages/gallery.php';
    }
}
