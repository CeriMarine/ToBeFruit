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


    <form action="Transaction.php" method="post">


        <table>

            <tr>

                <td><label for="description"><strong>Description :</strong></label></td>
                <td><input type="text" name="description" id="description"/></td>

            </tr>

            <tr>
                <td><label for="Product"><strong>Produit :</strong></label></td>
                <td><select type="text" name="Product" id="Product"/>
                    <option> Choisir </option>
<?php
                $sql='SELECT * FROM Product';
                $requet=$bdd->query($sql);
                while($prod=$requet->fetch()){

?>


                <option name="produit"><?= $prod['Nom']; ?></option>
                    <?php  }// endforeach; ?>
                    <option> Autre ... </option>
                    </select>
                </td>

            </tr>

            <tr>

                <td><label for="prix"><strong>Prix :</strong></label></td>
                <td><input type="text" name="prix" id="prix"/></td>

            </tr>

            <tr>

                <td><label for="poid"><strong>Poids :</strong></label></td>
                <td><input type="text" name="poid" id="poid"/></td>

            </tr>

            <tr>

                <td><label for="date"><strong>Date de la ceuillette :</strong></label></td>
                <td><input type="text" name="date" id="date"/></td>

            </tr>




        </table>

        <input type="submit" name="register" value="Mettre en vente"/>

        <input type="submit" name="registers" value="Proposer à l'échange"/>

    </form>

    <?php


    if(isset($_POST['register'])){

            $sql1 = 'INSERT INTO annonce VALUES ("","'.$_POST['description'].'","'.$_POST['Product'].'","'.$_POST['prix'].'",
                "'.$_POST['poid'].'","'.$_POST['date'].'")';
            $requet1 = $bdd->query($sql1);

            echo  " <p>Votre annonce à été prise en compte</p>";

    }



    if(isset($_POST['registers'])){


        $sql2 = 'INSERT INTO annonce VALUES ("","'.$_POST['description'].'","'.$_POST['product'].'","'.$_POST['prix'].'",
                "'.$_POST['poid'].'","'.$_POST['date'].'")';
        $requet2 = $bdd->query($sql2);

        echo "Votre demande d'échange à été prise en compte";

    }



    ?>


</div>
</body>
<footer>

</footer>
</html>