
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
    <table classe="ceriseee">
        <tr>
            <td><img class="imagefr" src="cerise.jpg"></td>
            <td><p>CERISES</p></td>
        </tr>
    </table>

    <?php

    $sql='SELECT cerise FROM Product';
    $requet=$bdd->query($sql);

    if($_POST[Product]=='cerises');
?>
    <div id="anoncadre">

        <p><?= $ann['Product']; ?></p>
    <p><?= $ann['Prix']; ?> €</p>
    <p><?= $ann['Poids']; ?> Kg</p>
    <p><?= $ann['Date']; ?></p>
    <p><?= $ann['Description']; ?> </p>

</div>

    ?>


</div>
</body>
<footer>

</footer>
</html>