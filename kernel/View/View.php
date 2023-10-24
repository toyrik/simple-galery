<?php

namespace App\Kernel\View;

class View
{
    public function page(string $name)
    {
        extract([
            'view' => $this
        ]);

        include_once APP_PATH . '/views/pages/' . $name . '.php';
    }

    public function component(string $name)
    {
        include_once APP_PATH . '/views/components/' . $name . '.php';
    }
}
