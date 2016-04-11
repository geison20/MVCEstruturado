<?php 

namespace App;

use SON\Bootstrap;

class Init extends Bootstrap {
    
    
    protected function initRoutes() 
    {
        {
            $routes["home"] = [
               "route"      => "/",
               "controller" => "Index",
               "action"     => "index"
            ];
            $routes["empresa"] = [
               "route"      => "/empresa",
               "controller" => "Index",
               "action"     => "empresa"
            ];
            
            $this->setRoute($routes);
            
        }
    }

}
