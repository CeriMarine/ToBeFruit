<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 15/04/2015
 * Time: 13:54
 */
                            /*les fonctions utilisées*/

function erreur($err='')
{
    $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
    exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}

function move_avatar($avatar) //déplacer l'avatar qui a été uploadé
{
    $extension_upload = strtolower(substr(  strrchr($avatar['name'], '.')  ,1));
    $name = time();
    $nomavatar = str_replace(' ','',$name).".".$extension_upload;
    $name = "./images/avatars/".str_replace(' ','',$name).".".$extension_upload;
    move_uploaded_file($avatar['tmp_name'],$name); //move_uploaded_file() déplace l'image dans le dossier images/avatars.
    return $nomavatar;
}

//-----------------------------------------------

function results($search){
    include("identifiants.php");
    $where = "";

    $where .= "membre_pseudo LIKE '%$search%'";

    $query = $db->query("SELECT * FROM membres WHERE $where");

    if($results = $query->fetchAll()){
        foreach($results as $result) {

            echo"<strong>".$result["membre_pseudo"]."</strong><br/><u>Email:</u><br/>".$result["membre_email"]."<br/>Adresse:".$result['membre_msn']."<br/>";
        }

    }else{

        echo 'Pas de résultat trouvé...';
    }
}