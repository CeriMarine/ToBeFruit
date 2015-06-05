<?php

require('config.php');

?>

<!DOCTYPE html>
<html>
<head>

    <title>Annonces</title>

</head>
<header>
    <?php
    include('header.php');
    ?>

</header>
<body>
<div class="principal">

<?php

    $sql='SELECT * FROM annonce';
    $requet=$bdd->query($sql);

    while ($ann=$requet->fetch()){
        ?>

        <div id="anoncadre">

        <p><?= $ann['Product']; ?></p>
        <p><?= $ann['Prix']; ?> €</p>
        <p><?= $ann['Poids']; ?> Kg</p>
        <p><?= $ann['Date']; ?></p>
        <p><?= $ann['Description']; ?> </p>

        </div>

    <?php
    }


?>


</div>
</body>
<footer>

</footer>
</html>