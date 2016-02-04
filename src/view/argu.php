<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 20/01/2016
 * Time: 10:07
 */
?>
<meta charset="utf-8">

<?php
echo "<h1>Page contenant un ou plusieurs arguments :</h1><br>";
foreach ($_GET as $key=>$item) {
    echo 'L\'argument $_GET[\''.$key.'\'] = '.$item."<br>";
}

echo "<br>La clé de l'argument est présente dans la route, la valeur est présente dans la route entrée par l'utilisateur";