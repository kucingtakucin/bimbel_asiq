<?php
$method = explode('/', $_SERVER['REQUEST_URI']);
define("BASE_URL", "http://{$_SERVER['SERVER_NAME']}/{$method[1]}");

// Database Setup
define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "namaku123");
define("DATABASE", "phpdasar");    
    

if (!session_id()) session_start();
require_once "vendor/autoload.php";
