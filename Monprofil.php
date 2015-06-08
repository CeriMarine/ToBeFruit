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

echo'<p><strong>Adresse E-Mail : </strong>
       <a href="mailto:'.stripslashes($data['membre_email']).'">
       '.stripslashes(htmlspecialchars($data['membre_email'])).'</a><br />';

echo'<strong>Adresse :</strong>'.stripslashes(htmlspecialchars($data['membre_msn'])).'<br />
<strong>Date de naissance :</strong>'.stripslashes(htmlspecialchars($data['membre_siteweb'])).'<br />
<strong>Signature: </strong>'.stripslashes(htmlspecialchars($data['membre_signature'])).'<br />
<br>

<a href="messagesprives.php">Mes messages privés</a><br />';


echo'Vous êtes inscrit depuis le
       <strong>'.date('d/m/Y',$data['membre_inscrit']).'</strong>
       et vous avez posté <strong>'.$data['membre_post'].'</strong> messages
       <br /><br />'
    ?>

       <a href="voirprofil.php?m= <?php echo $id; ?>&action=modifier"><input type="submit" name="modifier les informations" value="modifier les informations" /></a></div>';

<?php
$query->CloseCursor();