<?php

namespace app\core\exception;

class NotLoggedException extends \Exception {
    protected $code = 403;
    protected $message = "You have to be logged in to access this page.";

}