<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 20/01/2016
 * Time: 10:07
 */
$title = "Titre";
$content = "contenu";
include DIR_TMPL.'/header.php'; ?>
<?php
//$template = $twig->loadTemplate('in.html.twig');
//echo $template->render(array(
//    'moteur_name' => 'plouf'
//));
//?>
    <h1><?php echo $title; ?></h1>

    <p><?php echo $content; ?></p>

<?php include DIR_TMPL.'/footer.php'; ?>