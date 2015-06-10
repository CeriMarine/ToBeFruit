<?php
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 14/05/15
 * Time: 21:27
 */
session_start();
include("includes/identifiants.php");
include("includes/debut.php");

include("./includes/functions.php");
include("./includes/constants.php");
?>

<!DOCTYPE html>
<html>
<head>


    <title>To Be Fruit</title>
<link rel="stylesheet" href="css\style.css" type="text/css" />
<meta charset="UTF-8">

<table>
        <img class="logo" src="logo.png"/><br>
    </table>
<?php
if ($id==0) {
?>
<nav id="navbar">
    <ul>
        <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="debannonce.php">ANNONCES</a></li>
            <li><a href="fofo.php">FORUM</a></li>
            <li><a href="faq1.php">FAQ</a></li>
    </ul>

</nav>

<div id="bandelogo">

    <table>

        <form method="post">
            <input id="search" name="search" type="text" placeholder="Taper votre recherche"/>
            <input id="imagesearch" type="image" src="images/magnifier13.png" value="search"/><br>
        </form>

        <?php

            if(isset($_POST['search'])){
                echo "-";
                $search = addslashes(htmlspecialchars(trim($_POST['search'])));

                if(empty($search)){

                    echo '<span class="erreur">Veuillez remplir ce champ</span>';
                } else if(strlen($search)==1){

                    echo '<span class="erreur">Votre mot-clé de recherche est trop court</span>';
                } else{

                    results($search);

                }

            }


            ?>

        <h3><br>BIENVENUE !</h3>
        <p><br>Nous sommes une association à but non lucratif. Notre objectif est d'offrir aux particuliers des fruits et légumes
                bio de qualités. Nous prônons la convivialité et l'échange. Faites votre marché!</p>
        <div id="PC">

                    <img src="user168.png"><a href="connexion.php"> S'inscrire/S'identifier</a><br><br>
                <?php
                }
                else{
                    ?>
            <nav id="navbar">
                <ul>
                    <li><a href="index.php">ACCUEIL</a></li>
                        <li><a href="Monprofil.php">PROFIL</a></li>
                        <li><a href="Transaction.php">TRANSACTION</a></li>
                        <li><a href="debannonce.php">ANNONCES</a></li>
                        <li><a href="fofo.php">FORUM</a></li>
                        <li><a href="faq1.php">FAQ</a></li>
                </ul>

            </nav>

            <div id="bandelogo">

                <table>

                    <form method="post">
                        <input id="search" name="search" type="text" placeholder="Taper votre recherche"/>
                        <input id="imagesearch" type="image" src="images/magnifier13.png" value="search"/><br>
                    </form>

                    <?php

                    if(isset($_POST['search'])){
                        echo "-";
                        $search = addslashes(htmlspecialchars(trim($_POST['search'])));

                        if(empty($search)){

                            echo '<span class="erreur">Veuillez remplir ce champ</span>';
                        } else if(strlen($search)==1){

                            echo '<span class="erreur">Votre mot-clé de recherche est trop court</span>';
                        } else{

                            results($search);

                        }

                    }


                    ?>

                    <h3><br>BIENVENUE !</h3>
                    <p><br>Nous sommes une association à but non lucratif. Notre objectif est d'offrir aux particuliers des fruits et légumes
                        bio de qualités. Nous prônons la convivialité et l'échange. Faites votre marché!</p>
                    <div id="PC">

                    <img src="user168.png"><a href="connexion.php"> <?php echo "Bienvenue " .$_SESSION['pseudo']; ?> </a><br><br>
                        <img src="images/do10.png"><a href="deconnexion.php" id="deco">Déconnexion</a>
            <?php
                    }

            ?>
        </div>
            <?php include('footer.php') ?>
    </table>

   </div>
