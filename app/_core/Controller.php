<?php

namespace app\_core;

class Controller
{
    public function render(string $page, array $data = [])
    {
        if ($data) {
            extract($data);
        }

        $path = dirname(__FILE__, 2) . "\\mvc\\views\\";

        require_once $path . $page . ".php";
        exit;
    }

    public function partial(string $page, array $data = [])
    {
        $path = dirname(__FILE__, 2) . "\\mvc\\views\\partials\\";

        require_once $path . $page . ".php";
        exit;
    }

    public function redirect($route)
    {
        header("Location: " . $route);
        exit;
    }
}
