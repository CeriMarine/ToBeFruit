<?php
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 30/05/15
 * Time: 02:01
 */
require('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" src="style.css" type="text/css" />
    <title>To Be Fruit</title>

</head>
<header>
    <?php
    include('header.php');
    include('nav.php');
    ?>

</header>
<body>
<div class="principal" >

    <table>
        <tr id="blanc">

            <td>
                <a href="affann.php?produit=cerise"><div id="cerise">
                    <img class="imagefr" src="cerise.jpg">
                    <center><input id="boutonfr" type="submit" value="CERISES"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=citron"><div id="citron">
                    <img class="imagefr" src="citron.jpg">
                    <center><input id="boutonfr"  type="submit" value="CITRONS"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=abricot"><div id="abricot">
                    <img class="imagefr" src="abricot.jpg">
                    <center><input id="boutonfr"  type="submit" value="ABRICOTS"></center>
                </div></a>
            </td>

        </tr>

        <tr id="blanc">

            <td>
                <a href="affann.php?produit=pomme"><div id="pomme">
                    <img class="imagefr" src="pomme.png">
                    <center><input id="boutonfr" type="submit" value="POMMES"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=raisin"><div id="raisin">
                    <img class="imagefr" src="raisins.jpg">
                    <center><input id="boutonfr"  type="submit" value="RAISINS"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=rhubarbe"><div id="rhubarbe">
                    <img class="imagefr" src="rhubarbe.jpg">
                    <center><input id="boutonfr"  type="submit" value="RHUBARBES"></center>
                </div></a>
            </td>

        </tr>

        <tr id="blanc">

            <td>
                <a href="affann.php?produit=fraise"><div id="fraise">
                    <img class="imagefr" src="fraise.jpg">
                    <center><input id="boutonfr" type="submit" value="FRAISES"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=myrtille"><div id="myrtille">
                    <img class="imagefr" src="myrtille.jpg">
                    <center><input id="boutonfr"  type="submit" value="MYRTILLES"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=poire"><div id="poire">
                    <img class="imagefr" src="poire.jpg">
                    <center><input id="boutonfr"  type="submit" value="POIRES"></center>
                </div></a>
            </td>

        </tr>

    </table>

</div>
</body>
<footer>

</footer>
</html>