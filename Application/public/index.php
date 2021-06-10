<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\controllers\PathController;
use app\core\Application;

$config = include ('../config.php');
$app=new Application(dirname(__DIR__), $config);

$app->router->get('/',[SiteController::class, 'home']);
$app->router->get('/about', [SiteController::class, 'about']);
$app->router->get('/paths', [SiteController::class, 'paths']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);

$app->router->get('/paths/origami', [PathController::class, 'origami']);
$app->router->get('/paths/tie', [PathController::class, 'tie']);
$app->router->get('/paths/meals', [PathController::class, 'meals']);

$app->router->get('/path-modify', [PathController::class, 'pathModify']);
$app->router->post('/path-modify', [PathController::class, 'pathModify']);
$app->run();