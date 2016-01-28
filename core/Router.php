<?php

$loader = new Twig_Loader_Filesystem(DIR_TMPL); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array( 'cache' => false ));


class Router {
  public function run($route) {
    global $routes;
      $next = false;
    foreach ($routes as $routeItem) {
      $routeItem = "/".strtolower(str_replace(":", "/", $routeItem));
      if (strpos($routeItem, $route) !== FALSE){ $next = true; break; }
      //TODO Finir à partir du if($next), récupérer tous les $parts[3] et +, explode =, récupérer key + value 
    }
//    if (!empty($routes[$route])) {
    if ($next) {
      $parts = explode(':', $routes[$route]);
      $controller_name = $parts[0] . 'Controller';
      require_once('../src/controller/' . $controller_name . '.php');
      $controller = new $controller_name;
      return $controller->$parts[1]();
    }
    else {
      addErrorLog("No route for :".$route, __FILE__);
      header("HTTP/1.0 404 Not Found");
      require_once("../web/error/404.php");
    throw new Exception('No route for : ' . $route);
  }
  }
}
