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
        if($this->auth()->attempt($email, $password)) {
            $this->redirect('/');
        }

        $this->session()->set('error', 'Неверный логин или пароль');
        $this->redirect('/login');
    }

    public function logout()
    {
        $this->auth()->logout();

        $this->redirect('/login');
    }
}
