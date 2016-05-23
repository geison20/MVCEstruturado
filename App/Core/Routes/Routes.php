<?php declare(strict_types=1);

namespace App\Core\Routes;

use Symfony\Component\HttpFoundation\Request;

/**
 * Bootstrap Routes Framework
 */
abstract class Routes
{
    
    /**
     * Recebe um array com rotas.
     * @var array
     */
    private $route = array();

    /**
     * Call construct and runRoutes.
     */
    protected function __construct()
    {
        $httpRequest  = Request::createFromGlobals();
        var_dump($httpRequest->query->get('id'));die;
        $this->runRoutes($httpRequest->getPathInfo());
    }

    /*
    |--------------------------------------------------------------------------
    | Init Routes
    |--------------------------------------------------------------------------
    */
    
    abstract protected function initRoutes();

    /**
     * set routes for attribute
     * @param array $routes routes array.
     * @return   class chain.
     */
    protected function setRoute(array $routes)
    {
        $this->route = $routes;
    }

    /**
     * get URI from browser 
     * @return [String] [URI returned]
     */
    // private function getURL() : String
    // {
    //     return urldecode( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH));
    // }

    /**
     * Create Object from Controller and Call Actions.
     * @param  String $url [URI from Browser]
     */
    private function runRoutes(String $url)
    {
        array_walk($this->route, function ($value, $key) use ($url) 
        {    
            if ($value['route'] == $url)
            {
                $class = "App\\Controllers\\".ucfirst($value['controller']);
                $action = $value['action'];
                $controller = new $class();
                $controller->$action();
            }
        });
    }   
    
}