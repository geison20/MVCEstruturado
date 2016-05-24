<?php declare(strict_types=1);

namespace App\Models;

class Users
{
	
	public $db;

	function __construct(\App\Core\Database\InterfaceInstancePDO $db)
	{
		$this->db = $db->getInstancePDO();
	}

	public function getAllUsers()
	{
		return $this->db->query('SELECT * FROM usuario');	
	}
}