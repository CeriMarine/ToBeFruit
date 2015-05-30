<?php session_start();
require('config.php');
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 14/05/15
 * Time: 21:26
 */
?>

<!DOCTYPE html>
<html>
<head>


    <title>To Be Fruit</title>
    <?php
    include('header.php');

    ?>
</head>

<header>
</header>
<body>
<div class="principal">
    <div id="connect">
        <table>
            <tr>
                <td><p>Je suis déja membre :</p></td>
                <td><p>Je ne suis pas encore membre :</p></td>
            </tr>
            <tr>
                <td><form action="Ident.php" method="post">
                        <table>
                            <tr>
                                <td><label for="Pseudo"><strong>Pseudo :</strong></label></td>
                                <td><input type="text" name="Pseudo" id="pseudo"/></td>
                            </tr>

                            <tr>
                                <td><label for="pass"><strong>Mot de passe :</strong></label></td>
                                <td><input type="password" name="pass" id="pass"/></td>
                            </tr>
                        </table>

                        <input type="submit" name="register" value="Se connecter"/>

                    </form></td>


                <td><a href="LIEN" id="creer"></a><a href="Profil.php"> Creer Mon compte </a></td>
            </tr>


        </table>
    </div>

    <?php

    if(isset($_POST['register'])) {

        $sql = "SELECT * FROM Users WHERE Pseudo='".$_POST['Pseudo']."'";


        $donnees = $bdd->query($sql);
        $lignes = $donnees->fetch();



        if ($_POST["Pseudo"] = $lignes["Pseudo"]) {
            if ($_POST["pass"] = $lignes["Pass"]) {

                $_SESSION['actif'] = '1';
                $_SESSION['login'] = $lignes['Pseudo'];
                $msg = " Bienvenue ".$_SESSION['login'];

            } else {
                $msg = " Le mot de passe ne correspond pas";
            }


        }else{
            $msg = " Le Pseudo ne correspond pas";
        }
    }
    if($msg==true){
        echo $msg;
    }
    ?>

</div>
</body>
<footer>
</footer>
</html>