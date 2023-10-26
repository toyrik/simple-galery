<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return $this->view('register');
    }

    public function register()
    {
        $validated = $this->request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);


        if (! $validated) {
            foreach ($this->request()->errors() as $field => $errors) {

                $this->session()->set($field, $errors);
            }
            $this->redirect('/register');
        }

        $userId = $this->db()->insert('users',[
            'email' => $this->request()->input('email'),
            'password' => password_hash($this->request()->input('password'), PASSWORD_DEFAULT)
        ]);

        dd('User successfully register with id: '.$userId);
    }
}
