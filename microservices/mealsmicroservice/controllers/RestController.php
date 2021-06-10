<?php
namespace meals\controllers;

use meals\models\Lesson;
use meals\models\PostHandler;

class RestController {
    public static function rest($request) {
        if($request === "GET")
            return RestController::getAll();
        if($request === "POST"){
            $handler = new PostHandler($_POST);
            return $_POST;
        }
    }
    public static function getAll() {
        return Lesson::getAllLessons();
    }

}
?>