<?php

namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\NotLoggedException;

class PathMiddleware extends BaseMiddleware {
    public array $actions = [];
    public function __construct (array $actions = []) {
        $this->actions = $actions;
    }
    public function execute() {
        if(Application::$app->isGuest() && in_array(Application::$app->controller->action, $this->actions)) {
                throw new NotLoggedException();
        }
    }
}
