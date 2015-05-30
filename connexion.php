<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 11/05/2015
 * Time: 11:07
 */


$titre="Connexion";
include('header.php');

echo'<div class="principal">';

?>

                                        <!--Si le membre est connecté => message d'erreur-->
<?php
echo '<h1>Connexion</h1>';
if ($id!=0) erreur(ERR_IS_CO);
//$id contient 0 si le visiteur n'est pas connecté et l'id du membre sinon


                                                //On est dans la page de formulaire
if (!isset($_POST['pseudo']))
{
    echo '<form method="post" action="connexion.php">
	<fieldset>
	<legend>Connexion</legend>
	<p>
	<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" required/><br />
	<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" required/>
	</p>
	</fieldset>
	<p><input type="submit" value="Connexion" /></p></form>
	<a href="register.php">Pas encore inscrit ?</a>

	</div>
	</body>
	</html>';
}
else
{
    $message='';
                        //Oublie d'un champ
    if (empty($_POST['pseudo']) || empty($_POST['password']) )
    {
        $message = '';
    }
                        //On check le mot de passe
    else
    {
        $query=$db->prepare('SELECT membre_mdp, membre_id, membre_rang, membre_pseudo
        FROM membres WHERE membre_pseudo = :pseudo');
        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
        if ($data['membre_mdp'] == md5($_POST['password'])) // Acces OK !
        {
            $_SESSION['pseudo'] = $data['membre_pseudo'];
            $_SESSION['level'] = $data['membre_rang'];
            $_SESSION['id'] = $data['membre_id'];
            $message = '<p>Bienvenue '.$data['membre_pseudo'].',
			vous êtes maintenant connecté!</p>';
                echo'<meta http-equiv="refresh" content="1;URL=index.php">';
        }
                        // Acces pas OK !
        else
        {
            $message = '<p>Une erreur s\'est produite
	    pendant votre identification.<br /> Le mot de passe ou le pseudo
            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a>
	    pour revenir à la page précédente
	   <!--<br /><br />Cliquez <a href="./fofo.php">ici</a>
	    pour revenir à la page d accueil</p>--> ';
        }
        $query->CloseCursor();
    }
    echo $message.'</div></body></html>';
}
?>

                        <!--Après inscription revenir à la page précédente-->

