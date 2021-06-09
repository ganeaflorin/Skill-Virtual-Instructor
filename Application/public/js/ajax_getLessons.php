<?php
require_once __DIR__.'/../../vendor/autoload.php';
use app\core\Microservices;
$micro = new Microservices();
$pathNames = $micro->getPathNames();
$lessons = $micro->getLessons();
$json = [];
for($iterator=0; $iterator<count($pathNames); $iterator++){
    array_push($json, [$pathNames[$iterator] => $lessons[$iterator]]);
}
echo json_encode($json);
?>