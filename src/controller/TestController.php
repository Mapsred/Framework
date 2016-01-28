<?php

class TestController
{
  public function bonjour() {
    return '<h1>Bonjour</h1>';
  }
  public function bjr(){
      include_once "../src/view/index.php";
    return "OK";
  }

    public function tw(){
        include_once "../src/project/index.php";
        return "OK";
    }

    public function argu($args = null){
        include_once "../src/view/argu.php";
        return "OK";
    }

}
