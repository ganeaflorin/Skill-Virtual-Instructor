<?php
namespace app\controllers;
include('../vendor/autoload.php');

use app\core\Controller;
use app\core\middlewares\PathMiddleware;
use app\core\middlewares\AdminMiddleware;
use app\core\Application;
use app\core\Curl;
use app\core\Request;

class PathController extends Controller {
    public $lessons;
    public function __construct() {
        $this->registerMiddleware(new PathMiddleware(['origami', 'meals', 'tie']));
        $this->registerMiddleware(new AdminMiddleware(['pathModify']));
        $this->lessons = Application::$app->lessons;
    }

    public function origami() {
        
        $params = [
            'lessons' => $this->lessons[0]
        ];
        return $this->render('origami', $params);
    }

    public function meals() {
        $params = [
            'lessons' => $this->lessons[2]
        ];
        return $this->render('meals', $params);
    }
    public function tie() {
        $params = [
            'lessons' => $this->lessons[1]
        ];
        return $this->render('tie', $params);
    }
    
    public function pathModify(Request $request) {
        $curl = new Curl();  
        if($request->isPost()) {
            $curl->getPostResponse($request->getBody()["paths"],$request->getBody());
        }
        return $this->render('path-modify');
    }


}
