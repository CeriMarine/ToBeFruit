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
    include('nav.php');
    ?>

</header>
<body>
<div class="principal">

<?php

    $sql='SELECT * FROM annonce';
    $requet=$bdd->query($sql);

    while ($ann=$requet->fetch()){
        ?> <p style="color:white;"><?= $ann['Product']?>;
        <?= $ann['Description']; ?>
        <?= $ann['Prix']; ?></p>
    <?php
    }


?>


</div>
</body>
<footer>

</footer>
</html>