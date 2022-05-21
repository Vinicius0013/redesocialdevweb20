<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    require('vendor/autoload.php');
    
    $dotevn = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotevn->load();
    
    define('INCLUDE_PATH_STATIC', 'http://localhost:8080/redesocialdevweb20/DankiCode/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost:8080/redesocialdevweb20/');

    $app = new DankiCode\Application();
    $app->run();
?>