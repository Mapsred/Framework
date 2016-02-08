<?php

/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 04/02/2016
 * Time: 16:00
 */

/**
 * Class OrmController
 * Second controller pour le test de l'ORM
 */
class OrmController
{
    /**
     * @return bool
     * @road  /orm
     */
    public function ormTest(){
        include_once "../src/project/ormTest.php";
        return TRUE;
    }
    
}