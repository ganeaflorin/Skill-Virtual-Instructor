<?php
namespace app\controllers;
include('../vendor/autoload.php');

use app\core\Controller;
use app\core\middlewares\PathMiddleware;
use app\core\Application;
use app\core\Curl;
use app\core\Request;

class PathController extends Controller {
    public $lessons;
    public function __construct() {
        $this->registerMiddleware(new PathMiddleware(['origami', 'meals', 'tie']));
        $this->lessons = Application::$app->lessons;
    }

    public function origami() {
        
        $params = [
            'lessons' => $this->lessons[0]
        ];
        return $this->render('origami', $params);
    }

    public function meals() {
        $HOST_ADDRESS = '127.0.0.1:8887/server.php';
        return $this->render('meals');
    }
    public function tie() {
        // $HOST_ADDRESS = '127.0.0.1:8889/server.php';
        $params = [
            'lessons' => $this->lessons[1]
        ];
        return $this->render('tie', $params);
    }
    
    public function pathModify(Request $request) {
        $HOST_ADDRESS = 'localhost:8999/api.php';
        if($request->isPost()) {
            $curl = new Curl($HOST_ADDRESS);
            var_dump($curl->getPostResponse($request->getBody()));
        }
        return $this->render('path-modify');
    }

}
