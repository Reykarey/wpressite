<?php
session_start();
echo "hello";
define('APP_PATH', dirname(__FILE__));
//Router
include(APP_PATH . "/router.php");

//Controller
include(APP_PATH . "/controller/{$controller}Controller.php");

//View

include(APP_PATH . "/view/{$view}.php");
