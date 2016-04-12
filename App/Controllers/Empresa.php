<?php 

namespace App\Controllers;

class Empresa {
	
	
	public function index()
	{
		renderView('index.phtml');
	}

	/**
	 * Mostra as Empresas cadastradas
	 * @return array 
	 */
	public function showEmpresa()
	{
		renderView('empresa.phtml');
	}

}
