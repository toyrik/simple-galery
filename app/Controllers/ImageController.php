<?php

namespace App\Controllers;

class ImageController extends \App\Kernel\Controller\Controller
{
    public function add()
    {
        $this->view('admin/images/add');
    }

    public function store()
    {
       dd($this->request());
    }
}
