<?php

namespace App\Controllers;

use App\Kernel\View\View;

class GalleryController
{
    public function index(): void
    {
        $view = new View();
        $view->page('galleries');
    }

    public function show(): void
    {

        $view = new View();
        $view->page('gallery');
    }
}
