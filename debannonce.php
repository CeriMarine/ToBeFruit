
<?php

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

        <table id="choix">

            <tr>
                <td id="titre" colspan="2">
                    <div id="texteee">  Bienvenue dans notre espace FRUITS et LEGUMES  </div>

                </td>
            </tr>

            <tr id="blanc">
                <td>
                    <div id="fruit">
                        <a href="SelectFruits.php"><img class="imagefruit" src="fruit.jpg"></a>
                        <center><a href="SelectFruits.php"><input id="boutonfruit" type="submit" value="FRUITS"></center></a>
                    </div>
                </td>
                <td>
                    <div id="legume">
                        <a href="SelectLegumes.php"><img class="imagelegume" src="légumes.jpg"></a>
                        <center><a href="SelectLegumes.php"><input id="boutonleg"  type="submit" value="LEGUMES"></center></a>
                    </div>
                </td>
            </tr>
        </table>





    </div>
</body>
<footer>

</footer>
</html>