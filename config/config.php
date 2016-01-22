<?php
//TODO réussir à utiliser $twig dans src/project/index.php
session_start();
define('DIR_CONF', dirname(__DIR__."/config"));
$dirroot = explode('/',DIR_CONF);
if (count($dirroot) <= 1) { $dirroot = explode("\\", DIR_CONF);}
$root = "";
for ($i = 0; $i < count($dirroot)-1; $i++) {
    $root.=$dirroot[$i]."/";
}
define('DIR_ROOT', $root); //A déjà le / de fin
define('DIR_CORE', DIR_ROOT.'core');
define('DIR_SRC', DIR_ROOT.'src');
define('DIR_CTRL', DIR_SRC.'/controller');
define('DIR_TMPL', DIR_SRC.'/template');
define('DIR_VIEW', DIR_SRC.'/view');
define('DIR_WEB', DIR_ROOT.'web');
define('DIR_VENDOR', DIR_ROOT.'vendor');
require_once(DIR_CONF.'/routing.php');
//include_once(DIR_VENDOR.'/twig/twig/lib/Twig/Autoloader.php');
include_once (DIR_VENDOR."/autoload.php");
//Twig_Autoloader::register();

global $twig;
$loader = new Twig_Loader_Filesystem(DIR_TMPL); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
    'cache' => false
));
