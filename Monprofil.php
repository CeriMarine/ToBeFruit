<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 30/05/2015
 * Time: 05:08
 */
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

echo'<img src="./images/avatars/'.$data['membre_avatar'].'"
       alt="Ce membre n a pas d avatar" />';

echo'<div class="principal1">';
echo'<p align="right"><strong>Adresse E-Mail : </strong>
       <a href="mailto:'.stripslashes($data['membre_email']).'">
       <i><b><font color="red" >'.stripslashes(htmlspecialchars($data['membre_email'])).'</font></b></i></a><br />';

echo'<strong>Adresse : </strong>'.stripslashes(htmlspecialchars($data['membre_msn'])).'<br />
<strong>Date de naissance : </strong>'.stripslashes(htmlspecialchars($data['membre_siteweb'])).'<br />
<strong>Signature : </strong>'.stripslashes(htmlspecialchars($data['membre_signature'])).'<br />
<br></div>';?>


<p><a href="voirprofil.php?m= <?php echo $id; ?>&action=modifier"><input type="submit" name="modifier les informations" value="modifier les informations" /></a><br>
<?php
echo'<a href="messagesprives.php">Mes messages privés</a><br />';


echo'Vous êtes inscrit depuis le
       <strong>'.date('d/m/Y',$data['membre_inscrit']).'</strong>
       et vous avez posté <strong>'.$data['membre_post'].'</strong> messages
       <br /><br />'
    ?>
</p>
<?php
$fichierSource = "raisins.jpg";

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

$miniature = "mini_$fichierSource";
ImageJpeg ($im, $miniature);
echo'<img src="$miniature"/>';
?>
</div>
<?php
$query->CloseCursor();