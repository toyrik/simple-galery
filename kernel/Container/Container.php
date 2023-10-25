<?php

namespace App\Kernel\Container;

use App\Kernel\Http\Redirect;
use App\Kernel\Http\Request;
use App\Kernel\Router\Router;
use App\Kernel\Validator\Validator;
use App\Kernel\View\View;

class Container
{
    public readonly Request $request;

    public readonly Router $router;

    public readonly View $view;

    public readonly Validator $validator;

    public readonly Redirect $redirect;

    public function __construct()
    {
        $this->registerServices();
    }

    private function registerServices()
    {
        $this->validator = new Validator();
        $this->request = Request::createFromGlobals();
        $this->view = new View();
        $this->request->setValidator($this->validator);
        $this->redirect = new Redirect();
        $this->router = new Router($this->view, $this->request, $this->redirect);
    }
}
