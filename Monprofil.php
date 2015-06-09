<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 30/05/2015
 * Time: 05:08
 */

?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
<?php
include("header.php");

$membre = $id;

$query=$db->prepare('SELECT membre_pseudo, membre_avatar,
       membre_email, membre_msn, membre_signature, membre_siteweb, membre_post,
       membre_inscrit, membre_localisation
       FROM membres WHERE membre_id=:membre');
$query->bindValue(':membre',$membre, PDO::PARAM_INT);
$query->execute();
$data=$query->fetch();

//On affiche les infos sur le membre
echo'<div class="principal">';
echo'<h1>Profil de '.stripslashes(htmlspecialchars($data['membre_pseudo'])).'</h1>';

echo'<img class="photoprofil" src="./images/avatars/'.$data['membre_avatar'].'"
       alt="Ce membre n a pas d avatar" />';

echo'<div class="principal1">';
echo'<p align="right"><strong><font color="#ffb6c1">Adresse E-Mail : </font></strong>
       <a href="mailto:'.stripslashes($data['membre_email']).'">
       <i><b><font color="ghostwhite">'.stripslashes(htmlspecialchars($data['membre_email'])).'</font></b></i></a><br />';

echo'<strong><font color="#ffb6c1">Adresse : </font></strong>'.stripslashes(htmlspecialchars($data['membre_msn'])).'<br />
<strong><font color="#ffb6c1">Date de naissance : </font></strong>'.stripslashes(htmlspecialchars($data['membre_siteweb'])).'<br />
<strong><font color="#ffb6c1">Signature : </font></strong>'.stripslashes(htmlspecialchars($data['membre_signature'])).'<br />
<br></div>';?>

<div class="principal2">
<p><a href="voirprofil.php?m= <?php echo $id; ?>&action=modifier"><input type="submit" name="modifier les informations" value="modifier les informations" /></a><br>
<?php
echo'<a href="messagesprives.php"><font color="#5f9ea0">Mes messages privés</font></a><br>';

echo'<br>';
echo'Vous êtes inscrit depuis le
       <strong>'.date('d/m/Y',$data['membre_inscrit']).'</strong>
       et vous avez posté <strong>'.$data['membre_post'].'</strong> messages
       <br /><br />'
    ?>
</p>

    <p><a href="Achat.php">Mes achats en cours ou effectué</a></p>
    <p><a href="Vente.php">Mes ventes</a> </p></div>
<?php ?>
<!--$fichierSource = "raisins.jpg";

$largeurDestination = 200;
$hauteurDestination = 150;
$im = ImageCreateTrueColor ($largeurDestination, $hauteurDestination)
or die ("Erreur lors de la création de l'image");

$source = ImageCreateFromJpeg($fichierSource);

$largeurSource = imagesx($source);
$hauteurSource = imagesy($source);

$blanc = ImageColorAllocate ($im, 255, 255, 255);
$gris[0] = ImageColorAllocate ($im, 90, 90, 90);
$gris[1] = ImageColorAllocate ($im, 110, 110, 110);
$gris[2] = ImageColorAllocate ($im, 130, 130, 130);
$gris[3] = ImageColorAllocate ($im, 150, 150, 150);
$gris[4] = ImageColorAllocate ($im, 170, 170, 170);
$gris[5] = ImageColorAllocate ($im, 190, 190, 190);
$gris[6] = ImageColorAllocate ($im, 210, 210, 210);
$gris[7] = ImageColorAllocate ($im, 230, 230, 230);

for ($i=0; $i<=7; $i++) {
    ImageFilledRectangle ($im, $i, $i, $largeurDestination-$i, $hauteurDestination-$i, $gris[$i]);
}

ImageCopyResampled($im, $source, 8, 8, 0, 0, $largeurDestination-(2*8), $hauteurDestination-(2*8), $largeurSource, $hauteurSource);

ImageString($im, 0, 12, $hauteurDestination-18, "$fichierSource - ($largeurSource x $hauteurSource)", $blanc);

<<<<<<< HEAD
       <a href="voirprofil.php?m=&action=modifier"><input type="submit" name="modifier les informations" value="modifier les informations" /></a>';
=======
$miniature = "mini_$fichierSource";
ImageJpeg ($im, $miniature);
echo'<img src="$miniature"/>';
?>
</div> */
>>>>>>> 03b71b5ad8da444a1aee54bb03c304be0e0e4162

        <p><a href="Achat.php">Mes achats en cours ou effectué</a></p>
        <p><a href="Vente.php">Mes ventes</a> </p></div>
<?php
$query->CloseCursor();
?>
</body>
</html>
=======
?>
>>>>>>> 03b71b5ad8da444a1aee54bb03c304be0e0e4162
