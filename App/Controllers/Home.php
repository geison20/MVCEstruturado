<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\Users,
	App\Database;

class Home
{
	public function index()
	{
		
		
		renderView('index.phtml');
	}
	public function teste()
	{
		$user = new Users(Database::getInstancePDO());
		$x = $user->getAllUsers();

		var_dump($x->fetchAll(\PDO::FETCH_OBJ));die;
		
		echo "Controller: HOME | Action: TESTE";
		// renderView('index.phtml');
	}
}