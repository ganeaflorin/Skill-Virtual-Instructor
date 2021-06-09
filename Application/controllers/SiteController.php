<?php 
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\middlewares\AuthMiddleware;
class SiteController extends Controller{
    public function __construct() {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function about() {
        return $this->render('about');
    }
    public function paths() {
        return $this->render('paths');
    }


    public function home() {
        if(Application::$app->isGuest())
        $name = '';
        else $name = ", " . Application::$app->user->getDisplayName();

        $params = [
            'name' => $name 
        ];
        return $this->render('home', $params);
    }

}