<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 06/06/2015
 * Time: 14:36
 */

include "header.php";


/*Valeur de $transaction dans l'url*/
$get_Transaction=$_SESSION['transaction'];

?>
<div class="principal">
  <?php

  if ($id==0) erreur(ERR_IS_CO);

// Quand on clik sur le bouton on mémorise l'idannonce
   if(isset($_POST['acheter'])){
      $_SESSION['idannonce']=$_POST['monannonce'];
  }

                                    /*Contacter le posteur*/

echo'<p>Voulez vous contacter le posteur de cette annonce?
<a href="AnalyseTransaction.php?transaction='.$get_Transaction.'">Oui</a> Non
</p>';

$transaction=(isset($_GET['transaction']))?htmlspecialchars($_GET['transaction']):'';

                            /* Traitement de $transaction dans l'url*/
switch($transaction){
    case "acheter":
//On selectionne la ligne correspondant à l'idannonce
         $annonce=$_SESSION['idannonce'];

         $query1=$db->prepare('SELECT * FROM annonce WHERE id_annonce=:annonce ');
         $query1->bindValue(':annonce', $annonce, PDO::PARAM_INT);
         $query1->execute();
         $data1=$query1->fetch();

//On remplie la table transaction
   $vendeur=$data1['id_Users'];
   $acheteur=$id;
   $mpvendeur=2;
   $mpacheteur=1;

        $query2=$db->prepare('INSERT INTO transactions VALUES(:vendeur, :acheteur, :annonce, :mpvendeur, :mpacheteur)');
        $query2->bindValue(':vendeur', $vendeur, PDO::PARAM_INT);
        $query2->bindValue(':acheteur', $acheteur, PDO::PARAM_INT);
        $query2->bindValue(':annonce', $annonce, PDO::PARAM_INT);
        $query2->bindValue(':mpvendeur', $mpvendeur, PDO::PARAM_INT);
        $query2->bindValue(':mpacheteur', $mpacheteur, PDO::PARAM_INT);
        $query2->execute();

        echo'<p>Un message a été envoyé au posteur de cette annonce</p>';
        break;
    case "échanger":

        break;
    default;

}
?>
</div>