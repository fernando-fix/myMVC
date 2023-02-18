<?php

namespace app\_core;

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

        $findController = true;

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
                $findController = false;
            }
        }
        if ($findController === true) {
            echo "Erro 404, página não encontrada!";
        }
    }
}
