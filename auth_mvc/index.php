<?php
define('APP_ROOT', __DIR__);

require_once('vendor/autoload.php');

// autoloader for namespaced classes
spl_autoload_register(function ($class) {
    $classFile = str_replace("\\", DIRECTORY_SEPARATOR, $class.'.php');

    $classPath = APP_ROOT . '/app/' . $classFile;

    if(file_exists($classPath)) {
        require_once($classPath);
    }
});

session_start();

use App\Services\Route;
$route = new Route();

require_once('routes/route.php');

$route->handle();