<?php 

namespace App;

use SON\Bootstrap;

class Routes extends Bootstrap {
    
    
    protected function initRoutes() 
    {
        {
            $routes["home"] = [
               "route"      => "/",
               "controller" => "Empresa",
               "action"     => "index"
            ];
            $routes["empresa"] = [
               "route"      => "/empresa",
               "controller" => "Empresa",
               "action"     => "showEmpresa"
            ];
            
            $this->setRoute($routes);
            
        }
    }

}
