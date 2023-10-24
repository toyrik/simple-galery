<?php

namespace App\Kernel\View;

class View
{
    public function page(string $name)
    {
        include_once APP_PATH . '/views/pages/' . $name . '.php';
    }
}
