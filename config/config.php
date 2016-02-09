<?php

session_start();
define('DIR_CONF', dirname(__DIR__."/config"));
$dirroot = explode('/',DIR_CONF);
if (count($dirroot) <= 1) { $dirroot = explode("\\", DIR_CONF);}
$root = "";
for ($i = 0; $i < count($dirroot)-1; $i++) {
    $root.=$dirroot[$i]."/";
}
/**
 * Création des constantes de chemin d'accès pour les différents dossiers à utiliser
 */
define('DIR_ROOT', $root); //A déjà le / de fin
define('DIR_CORE', DIR_ROOT.'core');
define('DIR_SRC', DIR_ROOT.'src');
define('DIR_CTRL', DIR_SRC.'/controller');
define('DIR_TMPL', DIR_SRC.'/template');
define('DIR_VIEW', DIR_SRC.'/view');
define('DIR_WEB', DIR_ROOT.'web');
define('DIR_VENDOR', DIR_ROOT.'vendor');
define('DIR_APP', DIR_ROOT.'app');
define('DIR_LOG', DIR_APP.'/logs');
define('DIR_ORM', DIR_APP.'/orm');
define('DIR_ENTITY', DIR_ORM.'/src/Entity/');
/**
 * Require des fichier nécessaires au fonctionnement
 */
require_once(DIR_CONF.'/routing.php');
require_once(DIR_CONF."/logs.php");
require_once(DIR_VENDOR."/autoload.php");
require_once(DIR_ORM."/vendor/autoload.php");
require_once(DIR_CONF."/ormInstance.php");