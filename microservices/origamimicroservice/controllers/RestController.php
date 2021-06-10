<?php
namespace origami\controllers;
use origami\models\Lesson;
use origami\models\PostHandler;

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