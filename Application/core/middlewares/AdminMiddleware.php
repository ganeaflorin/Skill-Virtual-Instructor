<?php

namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\ForbiddenException;

class AdminMiddleware extends BaseMiddleware {
    public array $actions = [];
    public function __construct (array $actions = []) {
        $this->actions = $actions;
    }
    public function execute() {
        if(!Application::$app->isAdmin() && in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
        }
    }
}
