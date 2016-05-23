<?php 

	// Uso de PHP 7 para tipagem forte.
	declare(strict_types=1);

	/**
	 * Composer Autoload System.
	*/
	require_once "../vendor/autoload.php";

	// uso de namespaces usando estilo de psr-4.
	use 
        App\Routes as Route,
        App\Database,
        Dotenv\Dotenv;

        

	/*
    |--------------------------------------------------------------------------
    | Load System VAR 
    |--------------------------------------------------------------------------
    |
    | Carrega as Variaveis de Sistema
    | 
    | https://github.com/vlucas/phpdotenv
    |
    */
   
	$dotenv = new Dotenv(__DIR__); 
	$dotenv->load();
	$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);
	
	/*
    |--------------------------------------------------------------------------
    | Load Application Config 
    |--------------------------------------------------------------------------
    |
    | Carrega as Variaveis de Configuração da Aplicação
    | 
    | @return [Array] [ROOT/App/Config.php]
    |
    */
	
	$Configuration = include('../App/Config/Config.php');

	/*
    |--------------------------------------------------------------------------
    | Load System Routes 
    |--------------------------------------------------------------------------
    |
    | Carrega o Sistema de Rotas
    | 
    | App\Core\Routes\Routes;
    |
    */

	$bootApp = new Route();

	/*
    |--------------------------------------------------------------------------
    | Load System Database 
    |--------------------------------------------------------------------------
    |
    | Carrega o Sistema de Banco de dados
    | 
    | App\Core\Database\Database;
    |
    */
	
	$db = new Database();