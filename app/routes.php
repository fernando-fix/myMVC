<?php

require_once "../vendor/autoload.php";

use app\_core\Router;

$route = new Router;

$route->get("/", "HomeController", "index");
$route->get("/sobre", "HomeController", "about");
$route->post("/redirect", "HomeController", "vai");
$route->post("/form", "HomeController", "formAction");
$route->get("/form", "HomeController", "form");

$route->run();
