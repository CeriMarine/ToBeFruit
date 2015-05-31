
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


    <?php

    $nom=$_GET['produit'];
    echo $nom;

    $sql=("SELECT * FROM Annonce WHERE Product LIKE '%$nom%'");
    $request=$bdd->query($sql);
    while($ann=$request->fetch()){

?>

        <div id="anoncadre">

            <p><?= $ann['Product']; ?></p>
            <p><?= $ann['Prix']; ?> €</p>
            <p><?= $ann['Poids']; ?> Kg</p>
            <p><?= $ann['Date']; ?></p>
            <p><?= $ann['Description']; ?> </p>

        </div>

    <?php } ?>


</div>
</body>
<footer>

</footer>
</html>