<?php

namespace App\Controllers;

class LoginController extends \App\Kernel\Controller\Controller
{
    public function index()
    {
        return $this->view('login');
    }

    public function login()
    {

    }
}
