<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 07/06/2015
 * Time: 20:00
 */
include('header.php');


?>

<body>
<div class="principal">


    <?php
    $query1=$db->prepare('SELECT * FROM transactions WHERE id_acheteur=:id');
    $query1->bindValue(':id',$id,PDO::PARAM_INT);
    $query1->execute();
    $data1=$query1->fetch();
    $acheteur=$data1['id_acheteur'];

    if(empty($acheteur)){
        echo"<p>Vous n'avez pas d'achat en cours.</p>";
    }
    else{
    while($data1=$query1->fetch()){
        $idannonce=$data1['id_annonce'];


    $query2=$db->prepare('SELECT * FROM annonce WHERE id_annonce=:idannonce');
    $query2->bindValue(':idannonce',$idannonce,PDO::PARAM_INT);
    $query2->execute();

        $ann=$query2->fetch();
        $idUsers_ann=$ann['id_Users'];

        echo"<p>Vous vous êtes intéressé à cette annonce:</p>";
        ?>

        <table id="anoncadre">
            <form action="AnalyseTransaction.php" method="get">
                <td>
                    <?php
                    $query=$db->prepare('SELECT membre_id, membre_pseudo, membre_inscrit, membre_avatar, membre_localisation, membre_post, membre_signature
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

                </td>
            </form>
        </table>
    <?php
    }}
    ?>
</div>
</body>

