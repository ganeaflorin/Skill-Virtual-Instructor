<?php
namespace app\core;

use app\core\lesson\Lesson;

class Microservices {
    public array $lessons = [];
    public array $pathNames = [];
    public Curl $curl;

    public function __construct() {
        $this->curl = new Curl();
        $this->createLessons();
    }

    public function getLessons() {
        return $this->lessons;
    }

    public function getPathNames() {
        return $this->pathNames;
    }

    public function createLessons() {
        array_push($this->lessons, $this->origamiMicroservice());
        array_push($this->lessons, $this->tieMicroservice());
        array_push($this->lessons, $this->mealsMicroservice());
    }

    public function origamiMicroservice() {
        return $this->parseJson(json_decode($this->curl->getResponse("origami"), true));
    }

    public function tieMicroservice() {
        return $this->parseJson(json_decode($this->curl->getResponse("tie"), true));
    }

    public function mealsMicroservice() {
        return $this->parseJson(json_decode($this->curl->getResponse("meals"), true));
    }
    
    public function parseJson($json) {
        $lessons = [];
        $lessonId = 1;
        $pathName = $json['pathName'];
        \array_splice($json, 0, 1);
        array_push($this->pathNames, $pathName);

        foreach($json as $lessonArr) {
        $lesson = new Lesson($lessonId++, $lessonArr['name'], $lessonArr['steps']);
            array_push($lessons, $lesson);
        }
        return $lessons;
    }
}
