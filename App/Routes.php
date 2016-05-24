<?php declare(strict_types=1);

namespace App;

use App\Core\Routes\ExecRoutes as execRoute,
    App\Core\Routes\InitRoutes;

class Routes extends InitRoutes
{

    public function __construct()
    {
        $this->initRoutes();
    }
    
    /**
     * // @override
     * 
     * Create array with routes;
     * e.g :
     *   $routes["home"] = [
     *     "route"      => "/home",
     *     "controller" => "Home",
     *     "action"     => "index"
     *   ]; 
     */
    protected function initRoutes() 
    {
            $routes[] = [
               "route"      => "/",
               "controller" => "Home",
               "action"     => "index"
            ];
            $routes[] = [
               "route"      => "/teste",
               "controller" => "Home",
               "action"     => "teste"
            ];
             $routes[] = [
                "route"      => "/empresa",
                "controller" => "Empresa",
                "action"     => "showEmpresa"
             ];
            
            $route = new execRoute($routes);
    }
}
