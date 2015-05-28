<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 18/05/2015
 * Time: 10:34
 */



$titre="Déconnexion";
include('header.php');
include('nav.php');

/*include("includes/debut.php");*/
//include("includes/menu.php");
echo'<div class="principal">';

if ($id==0) erreur(ERR_IS_CO);

session_destroy();
echo '<p>Vous êtes à présent déconnecté <br />'
/*Cliquez <a href="'.htmlspecialchars($_SERVER['HTTP_REFERER']).'">ici</a>
pour revenir à la page précédente.<br />
Cliquez <a href="./fofo.php">ici</a> pour revenir à la page principale</p>';
echo '</div></body></html>';*/
?>