<?php

namespace App\Controllers;

use App\Models\Users,
    App\Database
    ;

class Home
{
	public function index()
	{


		renderView('index.phtml');
	}
	public function teste()
	{

    dd("OK");
		// $user = new Users(new Database());;
		// $x = $user->getAllUsers();
    //
		// var_dump($x->fetchAll(\PDO::FETCH_OBJ));die;
    //
		// echo "Controller: HOME | Action: TESTE";
		// renderView('index.phtml');
	}
}
