<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 20/01/2016
 * Time: 13:01
 */
//include_once('../config/config.php');
var_dump($twig);
    $template = $twig->loadTemplate('in.html.twig');
    echo $template->render(array(
        'moteur_name' => 'Twig'
    ));