<?php

namespace app\_core;

class Controller
{
    // $data estará disponível como variáveis ao renderizar a página
    public function render(string $page, array $data = [])
    {
        if ($data) {
            extract($data);
        }

        $path = dirname(__FILE__, 2) . "/mvc/views/";

        require $path . $page . ".php";
        exit;
    }

    // $data estará disponível como variáveis ao renderizar o partial
    public function partial(string $page, array $data = [])
    {
        if ($data) {
            extract($data);
        }

        $path = dirname(__FILE__, 2) . "/mvc/views/partials/";

        require $path . $page . ".php";
    }

    public function redirect($route)
    {
        header("Location: " . $route);
        exit;
    }
}
