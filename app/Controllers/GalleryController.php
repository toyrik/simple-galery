<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class GalleryController extends Controller
{
    public function index(): void
    {
        $this->view('galleries');
    }

    public function show(): void
    {
        $this->view('gallery');
    }
}
