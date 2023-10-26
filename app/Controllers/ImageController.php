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
        $validation = $this->request()->validate(
            ['title' => ['required', 'min:3', 'max:255']]
        );

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {

                $this->session()->set($field, $errors);
            }
            $this->redirect('/admin/images/add');
        }

        dd('Validation passed');
    }
}
