<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 18/05/2015
 * Time: 10:34
 */


$titre="Déconnexion";
include('header.php');

echo'<div class="principal">';

if ($id==0) erreur(ERR_IS_CO);

session_destroy();
echo '<p>Vous êtes à présent déconnecté <br />';
echo'<meta http-equiv="refresh" content="1;URL=index.php">';
?>