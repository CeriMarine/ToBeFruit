<?php session_start();
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 14/05/15
 * Time: 21:27
 */
?>
<link rel="stylesheet" href="style.css" type="text/css" />
<meta charset="UTF-8">

<table>
        <img class="logo" src="logo.png"/><br>
    </table>

<link rel="stylesheet" href="style.css" type="text/css" />

<div id="bandelogo">

    <table>
        <input id="imagesearch" type="image" src="magnifying%20glass42.png" value="search"/>
        <input id="search" type="search" placeholder="Rechercher un produit"/><br>

        <h3><br>BIENVENUE !</h3>
        <p><br>Nous sommes une association à but non lucratif. Notre objectif est d'offrir aux particuliers des fruits et légumes
                bio de qualités. Nous prônons la convivialité et l'échange. Faites votre marché!</p>
        <div id="PC">
            <img src="user168.png"><a href="connexion.php"> S'inscrire/S'identifier</a><br><br>
            <a href="LIEN" id="panier"><img src="add169.png"> Mon Panier</a>
        </div>
            <?php include('footer.php') ?>
    </table>

   </div>
