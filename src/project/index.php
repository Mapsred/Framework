<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 20/01/2016
 * Time: 13:01
 */

/**
 * @function tw_args, tw
 * Utilise le moteur de template TWIG pour appeler le template in.html.twig en envoyant des arguments
 *
 */
require_once('../config/config.php');
$_GET = $args;
global $twig;
$template = $twig->loadTemplate('in.html.twig');
echo $template->render(array(
    'moteur_name' => 'Twig'.$_GET['arggg'],
    'title' => "Le titre".$_GET["bien"]
));