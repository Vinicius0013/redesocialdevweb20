<?php
    session_start();
    require('vendor/autoload.php');
    
    define('INCLUDE_PATH_STATIC', 'http://localhost:8056/projeto-redes-sociais-web/DankiCode/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost:8056/projeto-redes-sociais-web/');

    $app = new DankiCode\Application();
    $app->run();
?>