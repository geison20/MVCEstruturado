<?php declare(strict_types=1);

namespace App;

use App\Core\Routes\Routes as route;

class Routes extends route
{

    public function __construct()
    {
        $this->initRoutes();

        parent::__construct();
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
            // $routes["empresa"] = [
            //    "route"      => "/empresa",
            //    "controller" => "Empresa",
            //    "action"     => "showEmpresa"
            // ];
            
            $this->setRoute($routes);
    }
}
