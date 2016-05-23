<?php declare(strict_types=1);

namespace App\Core\Database;

abstract class Database
{

	/*
    |--------------------------------------------------------------------------
    | Init Instance for PDO
    |--------------------------------------------------------------------------
    */
	abstract static function getInstancePDO();
}