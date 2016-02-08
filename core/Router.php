<?php

$loader = new Twig_Loader_Filesystem(DIR_TMPL); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array( 'cache' => false ));

class Router {
    public function run($route) {
        global $routes;
        //Si la route n'est pas dans le tableau des routes - on en déduit qu'il s'agit d'une route à argument
        if (!in_array($route, $routes)) {
            $potentialRoute = [];
            $nbParamRoute = count(explode("/",$route))-1;
            //On vérifie les routes qui contiennent le même nombre de paramètre que la route récupérée
            foreach ($routes as $routeList => $controller) {
                $nb = count(explode("/", $routeList))-1;
                if ($nb === $nbParamRoute) { $potentialRoute[$routeList] = $controller; }
            }
            //On vérifie si les routes potentielles ont les mêmes données hors arguments, si non, non valable
            foreach ($potentialRoute as $routeString => $controller) {
                $routeExpl = explode("/", $route);
                $potExpl = explode("/", $routeString);
                foreach ($routeExpl as $key => $value) {
                    if($value !== $potExpl[$key] && strpos($potExpl[$key], "{") === FALSE) {
                        unset($potentialRoute[$routeString]);
                    }
                }
            }
            $road = array_keys($potentialRoute)[0];
            $ArgRoad = explode("/",$road);
            $nbArgRoad = 0;
            foreach ($ArgRoad as $item) {
                if (strpos($item, "{") === FALSE && !empty($item)) { $nbArgRoad++; }
            }
            $ArgRoute = explode("/", $route);
            $route = $road;
            $args = [];
            for ($i = $nbArgRoad+1; $i < count($ArgRoute); $i++) {
                $args[str_replace(["{", "}"],"", $ArgRoad[$i])] = $ArgRoute[$i];
            }
        }
        if (!empty($routes[$route])) {
            $parts = explode(':', $routes[$route]);
            $controller_name = $parts[0] . 'Controller';
            addLog($route);
            require_once('../src/controller/' . $controller_name . '.php');
            $controller = new $controller_name;
            if (!empty($args)) {
                return $controller->$parts[1]($args);
            }else {
                return $controller->$parts[1]();
            }
        } else {
            addErrorLog("No route for :".$route, __FILE__);
            header("HTTP/1.0 404 Not Found");
            require_once("../web/error/404.php");
            throw new Exception('No route for : ' . $route);
        }
    }
}
