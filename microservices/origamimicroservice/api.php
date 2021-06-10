<?php
    header('Content-Type: application/json');
    require_once __DIR__.'/vendor/autoload.php';
    use origami\core\Application;
    use origami\controllers\RestController;
    $config = include('config.php');
    $app = new Application($config);
    echo json_encode(RestController::rest($_SERVER['REQUEST_METHOD']));
?>