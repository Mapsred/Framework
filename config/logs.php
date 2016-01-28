<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 27/01/2016
 * Time: 10:20
 */

function addLog($txt)
{
    file_put_contents(DIR_LOG."/access.log", date("[j/m/y H:i:s]")." - $txt \r\n", FILE_APPEND);
//    echo date("[j/m/y H:i:s]")." - $txt <br>"; #Decommenter uniquement pour débug
}

function addErrorLog($txt, $page)
{
    file_put_contents(DIR_LOG."/error.log", date("[j/m/y H:i:s]")." - $page - $txt \r\n", FILE_APPEND);
//    echo date("[j/m/y H:i:s]")." - class: $page - $txt"; #Decommenter uniquement pour débug
}

function addRoutingLog($txt)
{
    file_put_contents(DIR_LOG."/routing.log", date("[j/m/y H:i:s]")." - $txt \r\n", FILE_APPEND);
//    echo date("[j/m/y H:i:s]")." - $txt <br>"; #Decommenter uniquement pour débug
}
