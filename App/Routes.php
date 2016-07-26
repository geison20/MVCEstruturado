<?php

use App\Core\Routes\RouteSystem;

$app = new RouteSystem();

$app->addRoute("/", function () {

  $this->controller = "Home";
  $this->action = "index";
  $this->namespace = "App\\Controllers\\";
});

$app->addRoute("/teste", function () {

  $this->controller = "Home";
  $this->action = "teste";
  $this->namespace = "App\\Controllers\\";
});



$app->run();

//
// class Routes
// {
//
//     public function __construct()
//     {
//         $this->initRoutes();
//     }
//
//     /**
//      * // @override
//      *
//      * Create array with routes;
//      * e.g :
//      *   $routes["home"] = [
//      *     "route"      => "/home",
//      *     "controller" => "Home",
//      *     "action"     => "index"
//      *   ];
//      */
//     protected function initRoutes()
//     {
//             $routes[] = [
//                "route"      => "/",
//                "controller" => "Home",
//                "action"     => "index"
//             ];
//             $routes[] = [
//                "route"      => "/teste",
//                "controller" => "Home",
//                "action"     => "teste"
//             ];
//              $routes[] = [
//                 "route"      => "/empresa",
//                 "controller" => "Empresa",
//                 "action"     => "showEmpresa"
//              ];
//
//             $route = new execRoute($routes);
//     }
// }
