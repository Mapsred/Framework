<?php

global $routes;
//Premier élément : la route, second élément : le Controller et la function
$routes = array(
    '/test/bonjour' => 'Test:bonjour',
    '/test/bjr' => 'Test:bjr',
    '/test/tw' => 'Test:tw',
    '/test/argu/{arg}' => 'Test:argu',
    '/test/arg/{arggg}/{bien}' => 'Test:arg',
    '/test/arg/{arggg}/{bien}/{bn}' => 'Test:arg',
    '/test/args/{arggg}/{bien}' => 'Test:args',
    '/tw/args/{arggg}/{bien}' => 'Test:tw_args',
    '/test' => 'Test:bonjour',
    '/' => 'Test:index'
);
