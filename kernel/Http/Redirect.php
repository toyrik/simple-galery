<?php

namespace App\Kernel\Http;

class Redirect
{
    public function to(string $url): void
    {
        header("Location: $url");
        exit();
    }
}
