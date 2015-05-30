
<?php

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
                        <img class="imagefruit" src="fruit.jpg">
                        <center><input id="boutonfruit" type="submit" value="FRUITS"></center>
                    </div>
                </td>
                <td>
                    <div id="legume">
                        <img class="imagelegume" src="légumes.jpg">
                        <center><input id="boutonleg"  type="submit" value="LEGUMES"></center>
                    </div>
                </td>
            </tr>
        </table>





    </div>
</body>
<footer>

</footer>
</html>