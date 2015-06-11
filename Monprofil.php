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
echo'<a href="messagesprives.php"><font color="#6495ed">Mes messages privés</font></a><br>';

echo'<br>';
echo'Vous êtes inscrit depuis le
       <strong>'.date('d/m/Y',$data['membre_inscrit']).'</strong>
       et vous avez posté <strong>'.$data['membre_post'].'</strong> messages
       <br /><br />'
    ?>


    <a href="Achat.php"><font color="#7cfc00">Mes achats en cours ou effectués</font></a><br>
    <a href="Vente.php"><font color="#7cfc00">Mes ventes en cours ou effectuées</font></a></p></div>

<?php
$query->CloseCursor();
?>
</body>
</html>
