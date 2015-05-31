<?php
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 30/05/15
 * Time: 02:44
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
                <a href="affann.php?produit=asperge"><div id="asperge">
                    <img class="imagefr" src="asperge.jpg">
                    <center><input id="boutonfr" type="submit" value="ASPERGES"></center>
                </div>
            </td>

            <td>
                <a href="affann.php?produit=aubergine"><div id="aubergine">
                    <img class="imagefr" src="aubergine.jpg">
                    <center><input id="boutonfr"  type="submit" value="AUBERGINES"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=betterave"><div id="betterave">
                    <img class="imagefr" src="betterave.jpg">
                    <center><input id="boutonfr"  type="submit" value="BETTERAVES"></center>
                </div>
            </td>

        </tr>

        <tr id="blanc">

            <td>
                <a href="affann.php?produit=brocolis"><div id="brocolis">
                    <img class="imagefr" src="brocolis.jpg">
                    <center><input id="boutonfr" type="submit" value="BROCOLIS"></center>
                </div>
            </td>

            <td>
                <a href="affann.php?produit=carottes"><div id="carottes">
                    <img class="imagefr" src="carottes.jpg">
                    <center><input id="boutonfr"  type="submit" value="RAISINS"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=concombre"><div id="concombre">
                    <img class="imagefr" src="concombre.png">
                    <center><input id="boutonfr"  type="submit" value="CONCOMBRES"></center>
                </div></a>
            </td>

        </tr>

        <tr id="blanc">

            <td>
                <a href="affann.php?produit=courgette"><div id="courgette">
                    <img class="imagefr" src="courgette.jpg">
                    <center><input id="boutonfr" type="submit" value="COURGETTES"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=petits poids"><div id="petits poids">
                    <img class="imagefr" src="Petits%20Pois.jpg">
                    <center><input id="boutonfr"  type="submit" value="PETITS POIDS"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=poivrons"><div id="poivrons">
                    <img class="imagefr" src="Poivron.jpg">
                    <center><input id="boutonfr"  type="submit" value="POIVRONS"></center>
                </div></a>
            </td>

        </tr>

        <tr id="blanc">

            <td>
                <a href="affann.php?produit=pomme de terre"><div id="pomme de terre">
                    <img class="imagefr" src="pommedeterre.jpg">
                    <center><input id="boutonfr" type="submit" value="PATATES"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=salade"><div id="salade">
                    <img class="imagefr" src="salade.jpg">
                    <center><input id="boutonfr"  type="submit" value="SALADES"></center>
                </div></a>
            </td>

            <td>
                <a href="affann.php?produit=tomates"><div id="tomates">
                    <img class="imagefr" src="tomate.jpg">
                    <center><input id="boutonfr"  type="submit" value="TOMATES"></center>
                </div></a>
            </td>

        </tr>

    </table>

</div>
</body>
<footer>

</footer>
</html>