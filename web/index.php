<?php
/**
 * Require fichier config
 * Require fichier Router
 * On décompose le chemin d'accès et on l'envoie au routeur
 * Ce fichier est la base obligatoire du projet grâce au .htaccess
 */
require_once('../config/config.php');
require_once('../core/Router.php');
$uri = $_SERVER['REQUEST_URI'];

$dir = __DIR__;
$dir = $_SERVER['DOCUMENT_ROOT'];
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']) - 1);
$route = substr($uri, strlen($path));
$qq = explode('/', $route);
$route= "";
$qqq = 1;
for ($i = 1; $i < count($qq); $i++) {
    if ($qq[$i] !== "framework" && $qq[$i] !== "web") {
        $qqq++;
        $route.="/".$qq[$i];
    }
}
$router = new Router();
$response = $router->run($route);

if ($response !== FALSE && $response !== TRUE) {
    echo $response;
}
