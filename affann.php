
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
    $request=$db->query($sql);
    while($ann=$request->fetch()){
        $idUsers_ann=$ann['id_Users'];

?>

        <table id="anoncadre">
            <form action="AnalyseTransaction.php" method="POST">
                <td>
                    <?php $query=$db->prepare('SELECT membre_id, membre_pseudo, membre_inscrit, membre_avatar, membre_localisation, membre_post, membre_signature
                    FROM membres
                    WHERE membre_id =:idUsers_ann');
                    $query->bindValue(':idUsers_ann',$idUsers_ann,PDO::PARAM_INT);
                    $query->execute();
                    $data=$query->fetch();

                    echo '<img src="./images/avatars/'.$data['membre_avatar'].'" alt="" />

                    <strong><a href="./voirprofil.php?m='.$data['membre_id'].'&amp;action=consulter">
                     '.stripslashes(htmlspecialchars($data['membre_pseudo'])).'</a></strong>

                    <br />Membre inscrit le '.date('d/m/Y',$data['membre_inscrit']).'
                    <br />Code Postal : '.stripslashes(htmlspecialchars($data['membre_localisation'])).'</td>';?>

                <td>
                    <p><?= $ann['Product']; ?></p>
                    <p><?= $ann['Prix']; ?> €</p>
                    <p><?= $ann['Poids']; ?> Kg</p>
                    <p><?= $ann['Date']; ?></p>
                    <p><?= $ann['Description']; ?> </p>
                    <?php
                    $_SESSION['transaction']='acheter'; /*Valeur de $transaction dans l'url*/
                    ?>

                <input type="submit" id="achat" value="Acheter" name="acheter"/>
                <input type="hidden" name="monannonce" value="<?php echo $ann['id_annonce']; ?>"

                </td>
            </form>
        </table>
    <?php
    }
    ?>
</div>
</body>
<footer>

</footer>
</html>