<?php
use app\models\User;
$DB_DSN = "mysql:host=localhost;port=3306;dbname=skivi";
$DB_USER = 'root';
$DB_PASSWORD ='';
return $config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $DB_DSN,
        'user' => $DB_USER,
        'password' => $DB_PASSWORD
]];

?>