<?php
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 14/05/15
 * Time: 21:26
 */
require('config.php');

?>

<!DOCTYPE html>

<html>
<head>
    <title>To Be Fruit</title>

</head>
<header>
    <?php
    include('header.php');
    include('nav.php');
    ?>

</header>
<body>
<div class="principal">
<form action="Profil.php" method="post">

    <table>

        <tr>

            <td><label for="login"><strong>Pseudo :</strong></label></td>
            <td><input type="text" name="login" id="login"/></td>

        </tr>

        <tr>

            <td><label for="firstame"><strong>Nom :</strong></label></td>
            <td><input type="text" name="firstname" id="firstname"/></td>

        </tr>

        <tr>

            <td><label for="name"><strong>Prénom :</strong></label></td>
            <td><input type="text" name="name" id="name"/></td>

        </tr>

        <tr>

            <td><label for="date"><strong>Date de naissance :</strong></label></td>
            <td><input type="text" name="date" id="date"/></td>

        </tr>

        <tr>

            <td><label for="Adress"><strong>Adresse :</strong></label></td>
            <td><input type="text" name="Adress" id="Adress"/></td>

        </tr>

        <tr>

            <td><label for="postal"><strong>code postal :</strong></label></td>
            <td><input type="text" name="postal" id="postal"/></td>

        </tr>

        <tr>
            <td><label for="Email"><strong>Email :</strong></label></td>
            <td><input type="email" name="Email" id="Email"/></td>
        </tr>

        <tr>

            <td><label for="pass"><strong>Mot de passe :</strong></label></td>
            <td><input type="password" name="pass" id="pass"/></td>

        </tr>

        <tr>

            <td><label for="pass2"><strong>Confirmez le mot de passe :</strong></label></td>
            <td><input type="password" name="pass2" id="pass2"/></td>
        </tr>


    </table>

    <input type="submit" name="register" value="S'inscrire"/>

</form>
    <?php


    if(isset($_POST['register'])){
$login=$_POST["login"];
        if($_POST["pass"] == $_POST["pass2"]) {
            //$requete = $bdd->query("SELECT * FROM Users WHERE login='.$login.'");
            //$count=$requete->rowCount() ;
            //if ($count == 0) {


            $sql = 'INSERT INTO Users VALUES ("","' . $_POST['name'] . '","' . md5($_POST['pass']) . '","' . $_POST['Email'] . '","' . $_POST['login'] . '",
                "' . $_POST['firstame'] . '","' . $_POST['date'] . '","' . $_POST['Adress'] . '","' . $_POST['postal'] . '")';
            $requet = $bdd->query($sql);

            echo "Votre inscription à été prise en compte";
        //}
           // else{
             //   echo "Votre Pseudo existe déja";
            //}
        }

        else{
            echo "les mots de passes ne sont pas les mêmes";

        }
    }
    ?>
</div>

</body>
<footer>

</footer>
</html>

