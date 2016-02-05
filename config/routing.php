<?php

namespace config;

global $routes;
/**
 * Premier élément : la route
 * Les arguments sont à définir entre {}
 * Second élément : le Controller et la function de ce dernier
 */

//Anciennes routes
//$routes = array(
//    '/test/bonjour' => 'Test:bonjour',
//    '/test/bjr' => 'Test:bjr',
//    '/test/tw' => 'Test:tw',
//    '/test/argu/{arg}' => 'Test:argu',
//    '/test/arg/{arggg}/{bien}' => 'Test:arg',
//    '/test/arg/{arggg}/{bien}/{bn}' => 'Test:arg',
//    '/test/args/{arggg}/{bien}' => 'Test:args',
//    '/tw/args/{arggg}/{bien}' => 'Test:tw_args',
//    '/test' => 'Test:bonjour',
//    '/' => 'Test:index',
//    '/orm' => 'Orm:ormTest'
//);

$routes = [
    '/' => 'Demo:index', //Route classique, à la racine
    '/test/bonjour' => 'Demo:bonjour', //Route classique avec utilisation de paramètres de route
    '/test/argu/{arg}' => 'Demo:argu', //Route à un argument
    '/test/arg/{arggg}/{bien}' => 'Demo:argu', //Route à deux arguments
    '/test/arg/{arggg}/{bien}/{bn}' => 'Demo:argu', //Route à 3 éléments, il n'y a pas de limite au nombre
    '/tw/args/{arggg}/{bien}' => 'Demo:tw_args', //Route utilisant twig et des arguments
    '/orm' => 'Demo:ormTest', // Route insérant des objets dans la base de données à l'aide de l'ORM

];