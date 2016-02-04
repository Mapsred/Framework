<?php

class TestController
{
    public function bonjour() {
        return '<h1>Bonjour</h1>';
    }
    public function bjr(){
        include_once "../src/view/index.php";
        return TRUE;
    }

    public function tw(){
        include_once "../src/project/index.php";
        return TRUE;
    }

    public function argu($args = null){
        $_GET = $args;
        include_once "../src/view/argu.php";
        return TRUE;
    }

    public function argg($args = null){
        $_GET = $args;
        include_once "../src/view/argu.php";
        return TRUE;
    }
    public function arg($args = null){
        $_GET = $args;
        include_once "../src/view/argu.php";
        return TRUE;
    }

    public function tw_args($args = NULL){
        $_GET = $args;
        include_once "../src/project/index.php";
        return TRUE;
    }
    public function index() {
        return '<h1>Bonjour</h1>
                Bienvenue sur le framework';
    }



}
