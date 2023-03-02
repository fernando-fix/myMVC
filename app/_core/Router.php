<?php

namespace app\_core;

use app\_core\Controller;

class Router
{

    private $array = [];

    public function get($uri, $controller, $method)
    {
        $this->array[] = [
            "request" => "GET",
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method,
        ];
    }

    public function post($uri, $controller, $method)
    {
        $this->array[] = [
            "request" => "POST",
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method,
        ];
    }

    public function run()
    {
        $request = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        //setado com padrão false para quando não achar o controller
        $findController = false;

        foreach ($this->array as $value) {

            // verifica se a uri é válida e se é post ou get
            if ($uri === $value['uri'] && $request == $value['request']) {

                //verificando se o controller existe
                $controllerNameSpace = "app\\mvc\\controllers\\{$value['controller']}";
                if (!class_exists($controllerNameSpace)) {
                    echo "Não foi possível encontrar a classe {$controllerNameSpace}";
                    exit;
                }

                //verificando se o methodo do controller existe
                $controllerInstance = new $controllerNameSpace;
                if (!method_exists($controllerInstance, $value['method'])) {
                    echo "Não foi possível encontrar o método {$value['method']} no controller {$controllerNameSpace}";
                    exit;
                }

                //rodar método
                $controllerInstance->{$value['method']}();
                $findController = true;
            }
        }
        // Se não achou um controller ele renderiza a página 404
        if ($findController === false) {
            $newController = new Controller;
            $newController->render("404");
        }
    }
}
