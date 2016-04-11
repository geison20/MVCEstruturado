<?php

function renderView($path, $dados)
{
    try {
        $dados;
        include_once '../App/Views/'.$path;
    } catch (Exception $exc) {
        
        /**
         * futuramente gravar em log e armazanar no servidor.
         */
        echo $exc->getMessage();
    }
    
}