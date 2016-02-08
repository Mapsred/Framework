<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 08/02/2016
 * Time: 21:34
 */

global $twig;
global $EntityManager;


$Select = new \ORM\QueryBuilder\Select();
$Select->select("*");
$Select->from("post");
$request = $Select->toSql();
$final = new \ORM\QueryBuilder\QueryBuilder();
$request = $final->query($request, $param = ["PDO::FETCH_ASSOC"]);

$template = $twig->loadTemplate('orm.html.twig');
echo $template->render(array('navigation' => $request));
