<?php

/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 04/02/2016
 * Time: 17:29
 */

/**
 * Class DemoController
 * Chemins utilisés pour la démonstration lors de la soutenance du projet
 */
class DemoController
{

    /**
     * @return string
     * Page principale à la racine /
     * @road /
     */
    public function index() {
        return '<h1>Bonjour</h1>Bienvenue sur le framework';
    }

    /**
     * @return string
     * Premier test
     * @road /test/bonjour
     */
    public function bonjour() {
        return '<h1>Bonjour</h1>';
    }

    /**
     * @param null $args
     * @return bool
     * Premier test avec retour d'arguments _GET
     * @road /test/argu/{arg}
     */
    public function argu($args = null){
        $_GET = $args;
        include_once "../src/view/argu.php";
        return TRUE;
    }

    /**
     * @param null $args
     * @return bool
     * Test avec retour d'arguments _GET et affichage Twig
     * @road /tw/args/{arggg}/{bien}
     */
    public function tw_args($args = NULL){
        $_GET = $args;
        include_once "../src/project/index.php";
        return TRUE;
    }

    /**
     * @return bool
     * @road  /orm
     */
    public function ormTest(){
        include_once "../src/project/ormTest.php";
        return TRUE;
    }








    
}