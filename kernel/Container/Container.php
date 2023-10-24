<?php

namespace App\Kernel\Container;

use App\Kernel\Http\Request;
use App\Kernel\Router\Router;

class Container
{
    public readonly Request $request;

    public readonly Router $router;

    public function __construct()
    {
        $this->registerServices();
    }

    private function registerServices()
    {
        $this->router = new Router();
        $this->request = Request::createFromGlobals();
    }
}