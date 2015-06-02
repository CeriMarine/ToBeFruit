<?php

   $resultats="";
    // Traitement de la Requête
    if(isset($_POST['query']) && !empty($_POST['query'])){
    // si l'utilisateur a entré quelque chose, on traite sa requête

        $query = preg_replace("#[^a-zA-Z ?0-9]#i","", $_POST['query']);
        $sql = "SELECT membre_pseudo FROM membres WHERE membre_pseudo LIKE ?";
    }

   //Connexion à la base de donnée
    include("includes/identifiants.php");

    $req = $db->prepare($sql);
    $req->execute(array('%'.$query.'%'));

    $count = $req->rowCount();

    if($count >= 1){
        echo "$count résultat(s) trouvé(s) pour <strong>$query</strong><hr/>";
    } else{
        echo "0 résultat trouvé pour <strong>$query</strong><hr/>";
    }

?>
/**
 * Created by PhpStorm.
 * User: AlexisKD
 * Date: 02/06/15
 * Time: 11:41
 */
<!DOCTYPE html>
<html>
    <head>
        <title> Recherche </title>
        <meta charset="UTF-8"/>
    </head>
    <body>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label form="query">Entrer votre Recherche :</label>
            <input type="search" name="query" maxlength="50" size="80" id="query" />
            <input type="submit" value="Rechercher">
        </form>

    <?php echo $resultats; ?>
    </body>
</html>