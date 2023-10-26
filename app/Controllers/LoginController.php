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
        $email = $this->request()->input('email');
        $password = $this->request()->input('password');
        $this->auth()->attempt($email, $password);
        $this->redirect('/');
    }

    public function logout()
    {
        $this->auth()->logout();

        $this->redirect('/login');
    }
}
