<?php

namespace app\_core;

class Controller
{
    // $data estará disponível como variáveis ao renderizar a página
    public function render(string $page, array $data = [])
    {
        if ($data) {
            foreach ($data as $key => $value) {
                if (isset($$key)) {
                    echo "Erro: Não é possível redeclarar a variável $" . $key;
                    exit;
                }
            }
            extract($data);
        }

        $path = dirname(__FILE__, 2) . "/mvc/views/pages/";
        $file = $path . $page . ".php";
        if (file_exists($file)) {
            require $file;
            exit;
        } else {
            echo "Erro ao carregar a VIEW: " . $page;
            exit;
        }
    }

    // $data estará disponível como variáveis ao renderizar o partial
    public function partial(string $page, array $data = [])
    {
        if ($data) {
            foreach ($data as $key => $value) {
                if (isset($$key)) {
                    echo "Erro: Não é possível redeclarar a variável $" . $key;
                    exit;
                }
            }
            extract($data);
        }

        $path = dirname(__FILE__, 2) . "/mvc/views/partials/";
        $file = $path . $page . ".php";

        if (file_exists($file)) {
            require $file;
        } else {
            echo "Erro ao carregar a PARTIAL: " . $page;
            exit;
        }
    }

    public function redirect($route)
    {
        header("Location: " . $route);
        exit;
    }
}
