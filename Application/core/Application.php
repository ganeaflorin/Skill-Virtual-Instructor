<?php
namespace app\core;
use app\models\User;
use App;
use app\core\lesson\Lesson;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public static string $ROOT_DIR;
    public static Application $app;
    public ?Controller $controller=null;
    public Database $db;
    public Session $session;
    public ?DbModel $user;
    public string $userClass;
    public string $layout = 'main';
    public array $lessons = [];
    public array $pathNames = [];

    public function __construct($rootPath, array $config){
        //luam lectiile de la microservicii
        $micro = new Microservices();
        $this->lessons = $micro->getLessons();
        $this->pathNames = $micro->getPathNames();

        $this->userClass = $config['userClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router=new Router($this->request, $this->response);
        $this->db = new Database($config['db']);

        //daca avem userul in sesiune, setam userul in aplicatie
        $primaryValue = $this->session->get('user');
        if($primaryValue) {
        $primaryKey = $this->userClass::primaryKey();
        $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
        }
        else $this->user = null;
        }

    public function getController() {
        return $this->controller;
    }

    public function setController(Controller $controller) {
        $this->controller = $controller;
    }

    public function run(){
        try {
        echo $this->router->resolve();
        } catch (\Exception $e) {
            $this->response->setStatusCode($e->getCode());
            echo $this->router->renderView('_error', [
                'exception' => $e
            ]);
        }
    }

    //setam userul in sesiune
    public function login(DbModel $user) {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }

    public function logout() {
        $this->user = null;
        $this->session->remove('user');
    }
    
    public function isGuest() {
        $primaryValue = $this->session->get('user');
        if($primaryValue) {
            return false;
        }
        else return true;
    }
   
    public function isAdmin() {
        if($this->isGuest()) return false;
        if($this->user->admin)
            return true;
        return false;
    }
}