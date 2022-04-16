<?php
    session_start();
    require('vendor/autoload.php');
    
    $dotevn = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotevn->load();
    
    define('INCLUDE_PATH_STATIC', 'http://localhost:8080/redesocialdevweb20/DankiCode/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost:8080/redesocialdevweb20/');

    $app = new DankiCode\Application();
    $app->run();
?>