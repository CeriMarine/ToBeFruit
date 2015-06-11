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

    <title>Transaction</title>

</head>
<header>
    <?php
    include('header.php');
    ?>

</header>
<body>
<div class="principal">
<!--<div id="orga">

    <br>

    <table>

        <tr>
            <td> Région : <select name="region">
                    <option>Bordeaux</option>
                    <option>Paris</option>
                </select>
            </td>

            <td> Produit : <select name="produit">
                    <option>Cerise</option>
                </select>
            </td>

            <td> Transaction : <select name="transaction">
                    <option>Vendre</option>
                    <option>Acheter ou Echanger</option></select>
            </td>
        </tr>

    </table>

</div>-->

    <?php

    if($id==0){
        erreur(ERR_IS_CO);
    }

    else {

        ?>


        <form action="Transaction.php" method="post">


            <div class="transactprod">


                    <label for="Product"><strong><font color="#f5f5f5">Produit : </font></strong></label>
                    <select type="text" name="Product" id="Product"/>
                        <div class="transactprod">
                        <option> Choisir</option>
                        <?php
                        $sql = 'SELECT * FROM Product';
                        $requet = $db->query($sql);
                        while ($prod = $requet->fetch()) {

                            ?>

</div>
                            <option name="produit"><?= $prod['Nom']; ?></option>
                        <?php }// endforeach;
                        ?>
                        <option> Autre ...</option>
                        </select>




<<br>
                <div class="transactprod">

                    <label for="prix"><strong><font color="#f5f5f5">Prix : </font></strong></label>
                    <input type="text" name="prix" id="prix"/>
</div>
            <div class="transactprod">

                    <label for="poid"><strong><font color="#f5f5f5">Poids : </font></strong></label>
                    <input type="text" name="poid" id="poid"/>

</div>
                <div class="transactprod">

                    <label for="date"><strong><font color="#f5f5f5">Date de la ceuillette : </font></strong></label>
                    <input type="text" name="date" id="date"/>

</div>
            <div class="transactprod">


                    <label for="description"><strong><font color="#f5f5f5">Description : </font></strong></label>
                    <textarea name="description" id="description"></textarea>

</div>

            <input type="submit" name="register" value="Mettre en vente"/>

            <input type="submit" name="registers" value="Proposer à l'échange"/>

        </form>

        <?php



        if (isset($_POST['register'])) {


            $sql1 = 'INSERT INTO annonce VALUES (" '.$id.' ","' . $_POST['description'] . '","' . $_POST['Product'] . '","' . $_POST['prix'] . '",
                "' . $_POST['poid'] . '","' . $_POST['date'] . '")';
            $requet1 = $bdd->query($sql1);

            echo " <p>Votre annonce à été prise en compte</p>";

        }


        if (isset($_POST['registers'])) {


            $sql2 = 'INSERT INTO annonce VALUES ("","' . $_POST['description'] . '","' . $_POST['product'] . '","' . $_POST['prix'] . '",
                "' . $_POST['poid'] . '","' . $_POST['date'] . '")';
            $requet2 = $bdd->query($sql2);

            echo "Votre demande d'échange à été prise en compte";

        }

    }

    ?>


</div>
</body>
<footer>

</footer>
</html>