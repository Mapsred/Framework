<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 27/01/2016
 * Time: 10:20
 */

/**
 * @param $txt - le message à ajouter aux logs
 */
function addLog($txt)
{
    file_put_contents(DIR_LOG."/access.log", date("[j/m/y H:i:s]")." - $txt \r\n", FILE_APPEND);
}

/**
 * @param $txt - le message à ajouter aux logs
 * @param $page - fichier ou class ayant eu l'erreur
 */
function addErrorLog($txt, $page)
{
    file_put_contents(DIR_LOG."/error.log", date("[j/m/y H:i:s]")." - $page - $txt \r\n", FILE_APPEND);
}
