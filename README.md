#Framework LAMP

Framework contenant un Routeur, un moteur de template (twig), une orm (droxyum/supinternet-orm)

Il s'agit d'un modèle MVC pour la présentation au cours de LAMP de SupInternet 

Fonctionnalités :
#### Routeur:
Définition des chemins d'accès - à gauche le chemin d'accès (URL) et à droite le Controller et la fonction

`config/routing.php :`

`'/' => 'Demo:index'`  //Route classique, à la racine du projet

`'/test/argu/{arg}' => 'Demo:argu'` //Route à un argument arg

#### Fichier config :

`config/config.php :` 
Constantes de dossier pour core, src, controller, template, view, web, vendor, app, logs, orm

Les chemins d'accès sont des chemins absolus générés à partir du dossier actuel. Fonctionne pour Linux et Windows

`define('DIR_CORE', DIR_ROOT.'core');`

`define('DIR_SRC', DIR_ROOT.'src');`

`...`

Ajout des fichiers nécessaires :

`require_once(DIR_CONF.'/routing.php');`

`require_once(DIR_CONF."/logs.php");`

`...`

Créer le fichier ormInstance.php et instancer l'ORM :

`ormInstance.php`

`$Connection = new \ORM\Connection('host', 'database', 'user', 'password');`
`$EntityManager = new \ORM\Entity\Manager();`


#### Dossier src - le dossier accessible par l'utilisateur du framework

`src/controller ` //Dossier contenant les controller

`src/project ` //Dossier contenant les projets de l'utilisateur

`src/template ` //Dossier contenant les template de twig

`...`

#### Vendor - contient les annexes comme twig, à générer avec `php composer.phar install`

#### Web - Racine du projet

Ce dossier contient l'index qui servira pour les redirections du routing du framework ainsi que le htaccess

Il contient aussi les messages d'erreur



##Demo

URL : francoismathieu.ovh/framework

Documentation : francoismathieu.ovh/cours/lamp/doc

