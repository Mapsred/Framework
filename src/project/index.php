<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 20/01/2016
 * Time: 13:01
 */
    require_once('../config/config.php');
//    var_dump($_GET);
    global $twig;
    $template = $twig->loadTemplate('in.html.twig');
    echo $template->render(array(
        'moteur_name' => 'Twig',
        'title' => "Le titre"
    ));