<?php

namespace App\Core\Routes;

use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Sistema de rotas.
|--------------------------------------------------------------------------
*/

class RouteSystem
{

    /*
    |--------------------------------------------------------------------------
    | Array com rotas.
    |--------------------------------------------------------------------------
    */
    protected $route = array();

    /*
    |--------------------------------------------------------------------------
    | recebe o request do user.
    |--------------------------------------------------------------------------
    */
    protected $request;

    /*
    |--------------------------------------------------------------------------
    | armazena o controller da aplicacao.
    |--------------------------------------------------------------------------
    */
    protected $controller;

    /*
    |--------------------------------------------------------------------------
    | aponta para a action do controller.
    |--------------------------------------------------------------------------
    */
    protected $action;

    /*
    |--------------------------------------------------------------------------
    | aponta para o namespace do controller.
    |--------------------------------------------------------------------------
    */
    protected $namespace;


    /*
    |--------------------------------------------------------------------------
    | resgata a request .
    |--------------------------------------------------------------------------
    */

    private function request() : String
    {
      $this->request  = Request::createFromGlobals();
      return $this->request->getPathInfo();
    }

    /*
    |--------------------------------------------------------------------------
    | Adiciona Rotas e adiciona ao array.
    |--------------------------------------------------------------------------
    */

    public function addRoute(String $path, $callback)
    {
      $this->route[$path] = $callback->bindTo($this, __CLASS__);
    }

    /*
    |--------------------------------------------------------------------------
    | redireciona para o controller correto.
    |--------------------------------------------------------------------------
    */

    public function redirect()
    {
      $class = $this->namespace.ucfirst($this->controller);
      $action = $this->action;
      $controller = new $class();
      $controller->$action();
    }


    public function run()
    {
        array_walk($this->route, function ($callback, $path)
        {
          // dd($path);
            if ($path == $this->request())
            {
              $callback();

              $this->redirect();
            }
        });
    }

}
