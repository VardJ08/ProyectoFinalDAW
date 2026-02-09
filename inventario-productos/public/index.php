<?php

require_once '../app/config/database.php';

$controller = $_GET['controller'] ?? 'producto';
$action = $_GET['action'] ?? 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = "../app/controllers/$controllerName.php";

if (!file_exists($controllerFile)) {
    die("Controlador no encontrado");
}

require_once $controllerFile;

$controllerObject = new $controllerName();

if (!method_exists($controllerObject, $action)) {
    die("Acción no encontrada");
}

$controllerObject->$action();
