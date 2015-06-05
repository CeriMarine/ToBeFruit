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
?>
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
            <li><a href="Annonces.php">ANNONCES</a></li>
            <li><a href="fofo.php">FORUM</a></li>
            <li><a href="faq1.php">FAQ</a></li>
    </ul>

</nav>

<div id="bandelogo">

    <table>
        <input id="imagesearch" type="image" src="magnifying%20glass42.png" value="search"/>
        <input id="search" type="search" placeholder="Rechercher un membre"/><br>

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
                        <li><a href="FAQ.php">FAQ</a></li>
                </ul>

            </nav>

            <div id="bandelogo">

                <table>
                    <input id="imagesearch" type="image" src="magnifying%20glass42.png" value="search"/>
                    <input id="search" type="search" placeholder="Rechercher un produit"/><br>

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
