<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Autoloader
require_once 'vendor/autoload.php';

// Load Config
require_once 'config/config.php';

// Routing
$url = isset($_GET['url']) ? $_GET['url'] : '/';

// Define a default controller and method
$defaultController = 'HomeController';
$defaultMethod = 'index';

// Split the URL into parts
$urlParts = explode('/', trim($url, '/'));

// Extract the controller and method from the URL
$controllerName = isset($urlParts[0]) ? ucfirst($urlParts[0]) . 'Controller' : $defaultController;
$methodName = isset($urlParts[1]) ? $urlParts[1] : $defaultMethod;

// Create the controller file path
$controllerFile = 'App/Controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    include($controllerFile);
    $controllerName = "App\\Controllers\\" . $controllerName;

    // Check if the controller class exists
    if (class_exists($controllerName)) {
        // Create an instance of the controller
        $controller = new $controllerName();

        // Check if the method exists in the controller
        if (method_exists($controller, $methodName)) {
            // Call the method
            $controller->$methodName();
        } else {
            die("Method not found");
        }
    } else {
        die("Controller class not found");
    }
} else {
    die("Controller file not found");
}
