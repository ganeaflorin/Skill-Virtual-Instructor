<?php

use meals\core\Application;
use meals\controllers\RestController;

header('Content-Type: application/json');
    require_once __DIR__.'/vendor/autoload.php';

    $config = include('config.php');
    $app = new Application($config);
    echo json_encode(RestController::rest($_SERVER['REQUEST_METHOD']));
?>