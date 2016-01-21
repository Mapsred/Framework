<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 20/01/2016
 * Time: 10:07
 */


if (!isset($head))
{
    $head = array();
}
$head['title'] = array_key_exists('title', $head)
    ? $head['title'].' &mdash; '
    : '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $head['title']; ?>Router</title>
</head>
<body>
<h1>Header</h1>