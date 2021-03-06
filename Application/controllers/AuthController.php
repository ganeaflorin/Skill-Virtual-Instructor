<?php
namespace app\controllers;

use App;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;
use app\core\Response;
use app\models\LoginForm;
use app\core\middlewares\AuthMiddleware;
use app\core\middlewares\LoggedMiddleware;

class AuthController extends Controller {

    public function __construct() {
        $this->registerMiddleware(new LoggedMiddleware(['login', 'register']));
    }
    public function login(Request $request, Response $response) {
        $loginForm = new LoginForm();
        if($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()) {
                Application::$app->response->redirect('/');
                return;
            }
        }

        return $this->render('login', [
            'model'=>$loginForm
        ]
    );
    }
    public function register(Request $request) {
       
        $user = new User();
        if($request->isPost()) {
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering!');
                Application::$app->response->redirect('/login');
                exit;
            }
            return $this->render('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('main');
        return $this->render('register', [
            'model' => $user
        ]);
    }

    public function logout(Request $request, Response $response) {
        Application::$app->logout();
        $response->redirect('/');
    }
    
} 