<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 18/05/2015
 * Time: 10:47
 */

$titre="Enregistrement";
include("header.php");

echo'<div class="principal">';

if ($id!=0) erreur(ERR_IS_CO);

                                    /*Formulaire*/

if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
{

    echo '<div class="inscrii" class="meslabels1"> <h1>Inscription </h1>';
    echo '<form method="post" action="register.php" enctype="multipart/form-data">

	<fieldset><legend>Identifiants</legend>
	<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" required/><br/> (le pseudo doit contenir entre 3 et 15 caractères)<br />
	<label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" required/><br />
	<label for="confirm">* Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" required/>
	</fieldset>

	<fieldset><legend>Contacts</legend>
	<label for="email">* Votre E-mail :</label><input type="text" name="email" id="email" required/><br />
	<!--Modiff--> <label for="adress">* Adresse </label><input type="text" name="adress" id="adress" required/><br />
	<!--Modiff--> <label for="CodePostal">* Code Postal :</label><input type="text" name="CodePostal" id="CodePostal" required=""/><br />
	</fieldset>

	<fieldset><legend>Informations supplémentaires</legend>
	<!--Modiff--> <label for="date">* Date de naissance :</label><input type="text" name="date" id="date" required/><br />


	<br /><label for="avatar">Choisissez votre avatar :</label><input type="file" name="avatar" id="avatar" /><br />(Taille max : 500Ko)<br />
	<label for="signature">Signature :</label><textarea cols="40" rows="4" name="signature" id="signature" placeholder="La signature est limitée à 200 caractères"></textarea>
	</fieldset>
	<p>Les champs précédés d\' un * sont obligatoires</p>
	<p><input id="supavatar" name="case"type="checkbox" value="ok"required/>Validation des<a href="CDU.php"><i><b><font color="#1e90ff" > conditions</a></i></b></font></p>
	<p><input type="submit" value="S\'inscrire" /></p></form>
	</div>
	</div>
	</body>
	</html>';


} //Fin de la partie formulaire

                                                //Traitement


else //Série de tests sinon message d'erreur
{
    $pseudo_erreur1 = NULL;
    $pseudo_erreur2 = NULL;
    $mdp_erreur = NULL;
    $email_erreur1 = NULL;
    $email_erreur2 = NULL;
    $msn_erreur = NULL;
    $signature_erreur = NULL;
    $avatar_erreur = NULL;
    $avatar_erreur1 = NULL;
    $avatar_erreur2 = NULL;
    $avatar_erreur3 = NULL;

                                        //Test pseudo et mot de passe

    //On récupère les variables
    $i = 0; // la variable stocker le nombre d'erreurs
    $temps = time();
    $pseudo=$_POST['pseudo'];
    $signature = $_POST['signature'];
    $email = $_POST['email'];
    $msn = $_POST['adress'];
    $website = $_POST['date'];
    $localisation = $_POST['CodePostal'];
    $pass = md5($_POST['password']);
    $confirm = md5($_POST['confirm']);

    //Vérification du pseudo
    $query=$db->prepare('SELECT COUNT(*) AS nbr FROM membres WHERE membre_pseudo =:pseudo');
    $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
    $query->execute();
    $pseudo_free=($query->fetchColumn()==0)?1:0; //récupére le nombre d'entrées correspondant à la requête
    $query->CloseCursor();
    if(!$pseudo_free)
    {
        $pseudo_erreur1 = "Votre pseudo est déjà utilisé par un membre";
        $i++;
    }

    if (strlen($pseudo) < 3 || strlen($pseudo) > 15) //pseudo entre 3 et 15 caractères
    {
        $pseudo_erreur2 = "Votre pseudo est soit trop grand, soit trop petit";
        $i++;
    }

    //Vérification du mdp
    if ($pass != $confirm || empty($confirm) || empty($pass))
    {
        $mdp_erreur = "Votre mot de passe et votre confirmation diffèrent, ou sont vides";
        $i++;
    }

                                        //Vérification de l'adresse email

//Il faut que l'adresse email n'ait jamais été utilisée
$query=$db->prepare('SELECT COUNT(*) AS nbr FROM membres WHERE membre_email =:mail');
$query->bindValue(':mail',$email, PDO::PARAM_STR);
$query->execute();
$mail_free=($query->fetchColumn()==0)?1:0;
$query->CloseCursor();

if(!$mail_free)
{
    $email_erreur1 = "Votre adresse email est déjà utilisée par un membre";
    $i++;
}
//On vérifie la forme maintenant
if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email) || empty($email))
{
    $email_erreur2 = "Votre adresse E-Mail n'a pas un format valide";
    $i++;
}

//Vérification de l'Adresse
/*if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $msn) && !empty($msn))
{
    $msn_erreur = "Votre adresse MSN n'a pas un format valide";
    $i++;
}*/

//Vérification de la signature
if (strlen($signature) > 200)  //la longueur
{
    $signature_erreur = "Votre signature est trop longue";
    $i++;
}

                                    //Vérification de l'avatar :

if (!empty($_FILES['avatar']['size']))
{
    //On définit les variables :
    $maxsize = 500024; //Poid de l'image
    $maxwidth = 1000; //Largeur de l'image
    $maxheight = 1000; //Longueur de l'image
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' ); //Liste des extensions valides

    if ($_FILES['avatar']['error'] > 0)
    {
        $avatar_erreur = "Erreur lors du transfert de l'avatar : ";
    }
    if ($_FILES['avatar']['size'] > $maxsize)
    {
        $i++; // i s'incrémente à chaque erreur
        $avatar_erreur1 = "Le fichier est trop gros : (<strong>".$_FILES['avatar']['size']." Octets</strong>    contre <strong>".$maxsize." Octets</strong>)";
    }

    $image_sizes = getimagesize($_FILES['avatar']['tmp_name']);
    if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight)
    {
        $i++;
        $avatar_erreur2 = "Image trop large ou trop longue :
                (<strong>".$image_sizes[0]."x".$image_sizes[1]."</strong> contre <strong>".$maxwidth."x".$maxheight."</strong>)";
    }

    $extension_upload = strtolower(substr(  strrchr($_FILES['avatar']['name'], '.')  ,1));
    if (!in_array($extension_upload,$extensions_valides) )
    {
        $i++;
        $avatar_erreur3 = "Extension de l'avatar incorrecte";
    }
}

                                                //On affiche le message

if ($i==0) // Pas d'erreur (i s'incrémente à chaque erreur)
{
    echo'<h1>Inscription terminée</h1>';
    echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['pseudo'])).' vous êtes maintenant inscrit sur le forum</p>'
	/*<p>Cliquez <a href="./fofo.php">ici</a> pour revenir à la page d accueil</p>'*/;

    //La ligne suivante sera commentée plus bas
    $nomavatar=(!empty($_FILES['avatar']['size']))?move_avatar($_FILES['avatar']):''; //fct move_avatar: déplacer l'avatar qui a été uploadé

    $query=$db->prepare('INSERT INTO membres (membre_pseudo, membre_mdp, membre_email,
        membre_msn, membre_siteweb, membre_avatar,
        membre_signature, membre_localisation, membre_inscrit,
        membre_derniere_visite)
        VALUES (:pseudo, :pass, :email, :msn, :website, :nomavatar, :signature, :localisation, :temps, :temps)');
    $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $query->bindValue(':pass', $pass, PDO::PARAM_INT);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':msn', $msn, PDO::PARAM_STR);
    $query->bindValue(':website', $website, PDO::PARAM_STR);
    $query->bindValue(':nomavatar', $nomavatar, PDO::PARAM_STR);
    $query->bindValue(':signature', $signature, PDO::PARAM_STR);
    $query->bindValue(':localisation', $localisation, PDO::PARAM_STR);
    $query->bindValue(':temps', $temps, PDO::PARAM_INT);
    $query->execute();

    //Et on définit les variables de sessions
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['id'] = $db->lastInsertId(); ;
    $_SESSION['level'] = 2;
    $query->CloseCursor();
}
else
{
    echo'<h1>Inscription interrompue</h1>';
    echo'<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>';
    echo'<p>'.$i.' erreur(s)</p>';
    echo'<p>'.$pseudo_erreur1.'</p>';
    echo'<p>'.$pseudo_erreur2.'</p>';
    echo'<p>'.$mdp_erreur.'</p>';
    echo'<p>'.$email_erreur1.'</p>';
    echo'<p>'.$email_erreur2.'</p>';
    echo'<p>'.$msn_erreur.'</p>';
    echo'<p>'.$signature_erreur.'</p>';
    echo'<p>'.$avatar_erreur.'</p>';
    echo'<p>'.$avatar_erreur1.'</p>';
    echo'<p>'.$avatar_erreur2.'</p>';
    echo'<p>'.$avatar_erreur3.'</p>';

    echo'<p>Cliquez <a href="./register.php">ici</a> pour recommencer</p>';
}
}
?>
</div>
</body>
</html>