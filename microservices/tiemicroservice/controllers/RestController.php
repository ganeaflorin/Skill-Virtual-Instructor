<?php
namespace tie\controllers;

use tie\models\PostHandler;
use tie\models\Lesson;

class RestController {
    public static function rest($request) {
        if($request === "GET")
            return RestController::getAll();
            if($request === "POST"){
                $handler = new PostHandler($_POST);
            }
            return $_POST;
    }
    public static function getAll() {
        return Lesson::getAllLessons();
    }
}

?>