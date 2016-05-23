<?php declare(strict_types=1);

namespace App\Models;

class Users
{
	
	public $db;

	function __construct(\PDO $db)
	{
		$this->db = $db;
	}

	public function getAllUsers()
	{
		return $this->db->query('SELECT * FROM users');	
	}
}