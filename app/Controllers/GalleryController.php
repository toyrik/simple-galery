<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\View\View;

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
