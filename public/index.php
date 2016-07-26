<?php


    /*
    |--------------------------------------------------------------------------
    | Microframework desenvolvido e mantido por Geisson Machado Antunes <geisonnm@hotmail.com>
    |--------------------------------------------------------------------------
    |
    | Front Controller <design pattern>
    */



    /*
    |--------------------------------------------------------------------------
    | Composer autoload
    |--------------------------------------------------------------------------
    |
    | autoload class and files php.
    */

    require_once "../vendor/autoload.php";

    /*
    |--------------------------------------------------------------------------
    | Namespaces <psr-4>
    |--------------------------------------------------------------------------
    |
    */

    use
        App\Routes as Route,
        App\Database,
        Dotenv\Dotenv;

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

    $config = include('../App/Config/Config.php');

    /*
    |--------------------------------------------------------------------------
    | Load System VAR
    |--------------------------------------------------------------------------
    |
    | Carrega as Variaveis de ambiente do sistema
    |
    | https://github.com/vlucas/phpdotenv
    |
    */

    $dotenv = new Dotenv($config['DOTENV_PATH']);
    $dotenv->load();
    $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

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

    require_once("../App/Routes.php");

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

    new Database();
