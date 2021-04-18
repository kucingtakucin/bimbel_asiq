<?php
$method = explode('/', $_SERVER['REQUEST_URI']);
//if (!empty($method)) {
    define("BASE_URL", "http://{$_SERVER['SERVER_NAME']}:{$_SERVER['SERVER_PORT']}/{$method[1]}");
//} else {
//    define("BASE_URL", "http://{$_SERVER['SERVER_NAME']}:{$_SERVER['SERVER_PORT']}");
//}

// Database Setup
define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "namaku123");
define("DATABASE", "bisiq");
    

if (!session_id()) session_start();
require_once "vendor/autoload.php";
