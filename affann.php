
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

            <input type="submit" id="achat" value="Acheter"/>
        </div>

    <?php } ?>


</div>
</body>
<footer>

</footer>
</html>