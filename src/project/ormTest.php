<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 04/02/2016
 * Time: 16:01
 */
?>
<meta charset="UTF-8">
<?php

/**
 * Récupération de $EntityManager défini dans config
 * Test de l'ORM intégrée
 */
global $EntityManager;

echo "<h1>Hello World !</h1>";

$Post = new \ORM\Entity\Post(); //New post
$Post->setTitle('My post title'); //Insert title
$Post->setContent('My post content'); //Insert content
$EntityManager->persist($Post); //Insert post in database

echo "Des éléments ont été ajoutés dans la base de données grâce à l'ORM !";