<?php

namespace src\controller;

/**
 * Class TestController
 * Premier controller contenant des tests
 */
class TestController
{
    /**
     * @return string
     * Premier test
     * @road /test/bonjour
     */
    public function bonjour() {
        return '<h1>Bonjour</h1>';
    }

    /**
     * @return bool
     * Second test
     * @road /test/bjr
     */
    public function bjr(){
        include_once "../src/view/index.php";
        return TRUE;
    }

    /**
     * @return bool
     * Test avec affichage par twig
     * @road /test/tw
     */
    public function tw(){
        include_once "../src/project/index.php";
        return TRUE;
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
     * Second test avec retour d'arguments _GET
     * @road
     */
    public function argg($args = null){
        $_GET = $args;
        include_once "../src/view/argu.php";
        return TRUE;
    }

    /**
     * @param null $args
     * @return bool
     * Troisième test avec retour d'arguments _GET
     * @road /test/arg/{arggg}/{bien}
     */
    public function arg($args = null){
        $_GET = $args;
        include_once "../src/view/argu.php";
        return TRUE;
    }

    /**
     * @param null $args
     * @return bool
     * Test avec retour d'arguments _GET et affichage Twig
     * @road /test/args/{arggg}/{bien}
     */
    public function tw_args($args = NULL){
        $_GET = $args;
        include_once "../src/project/index.php";
        return TRUE;
    }

    /**
     * @return string
     * Page principale à la racine /
     * @road /
     */
    public function index() {
        return '<h1>Bonjour</h1>
                Bienvenue sur le framework';
    }



}
