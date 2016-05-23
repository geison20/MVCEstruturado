<?php declare(strict_types=1);

namespace App;

use App\Core\Database\Database as DB;

class Database extends DB
{

	static function getInstancePDO()
	{
		try {
			return new \PDO( sprintf("mysql:host=%s;dbname=%s", getenv('DB_HOST'), getenv('DB_NAME')), 
				getenv('DB_USER'), getenv('DB_PASS'));
		} catch (\PDOException $e) {
			//SaveLog($e); NÃO IMPLEMENTADA.
			die('erro');
		}
	}
}