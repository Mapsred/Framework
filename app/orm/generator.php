<?php
/**
 * Created by PhpStorm.
 * User: droxy
 * Date: 09/12/15
 * Time: 10:58
 */

//require 'vendor/autoload.php';
require_once ("../../config/config.php");
//pgp generate.php generate:entity action Action

global $Connection;

$Console = new \ORM\Console\Console('\\Entity', $argv);