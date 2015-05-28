<?php
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 14/05/15
 * Time: 21:26
 */
include("includes/identifiants.php");
include("includes/debut.php");

if ($id==0) {
    ?>

    <nav id="navbar">
        <ul>
            <li><a href="index.php">ACCUEIL</a></li>
            <a href="">
                <li><a href="Transaction.php">TRANSACTION</a></li>
                <li><a href="Annonces.php">ANNONCES</a></li>
                <li><a href="fofo.php">FORUM</a></li>
                <li><a href="#">FAQ</a></li>
        </ul>

    </nav>
<?php
}
else{
    ?>
    <nav id="navbar">
        <ul>
            <li><a href="index.php">ACCUEIL</a></li>
            <a href="">
                <li><a href="voirprofil.php">PROFIL</a></li>
                <li><a href="Transaction.php">TRANSACTION</a></li>
                <li><a href="Annonces.php">ANNONCES</a></li>
                <li><a href="fofo.php">FORUM</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="deconnection.php">DECONNEXION</a></li>
        </ul>

    </nav>
<?php
}
