<?php

namespace App\Controllers;

/**
 * Description of Index
 *
 * @author geisson
 */
class Index {
    
    public function index() 
    {
        $dados = ['name'=>'geisson', 'age'=>'1991'];
        renderView("index.phtml", $dados);
        
    }
    
    public function empresa() 
    {
        include_once '../App/Views/empresa.phtml';
    }
    
}
