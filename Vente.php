<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 09/06/2015
 * Time: 14:43
 */
include('header.php');


?>

<body>
<div class="principal">


    <?php
    // selection de mes annonces ayant un acheteur
    $query1=$db->prepare('SELECT * FROM transactions WHERE id_vendeur=:id');
    $query1->bindValue(':id',$id,PDO::PARAM_INT);
    $query1->execute();
    $data1=$query1->fetch();
    $acheteur=$data1['id_acheteur'];


if(empty($acheteur)){
    echo"<p>Vous n'avez pas de transaction en cours</p>";
}
    else{
    // affichage des annonces
    while($data1=$query1->fetch()){
        $idannonce=$data1['id_annonce'];

        $query2=$db->prepare('SELECT * FROM annonce WHERE id_annonce=:idannonce');
        $query2->bindValue(':idannonce',$idannonce,PDO::PARAM_INT);
        $query2->execute();
        $ann=$query2->fetch();
        $idUsers_ann=$ann['id_Users'];


        // Je récupère le pseudo de l'acheteur
        $query3=$db->prepare('SELECT membre_id, membre_pseudo FROM membres WHERE membre_id =:acheteur');
        $query3->bindValue(':acheteur',$acheteur,PDO::PARAM_INT);
        $query3->execute();
        $data3=$query3->fetch();

        echo"<p>" .$data3['membre_pseudo']. " est intéressé par votre annonce ci-dessous.<br/>
        Veillez le recontacter par messages privés ou par e-mail pour finaliser votre achat.</p>";
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

                    echo '<img class="photoprofil" src="./images/avatars/'.$data['membre_avatar'].'" alt="" />

                    <strong><br/><a href="./voirprofil.php?m='.$data['membre_id'].'&amp;action=consulter">
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
