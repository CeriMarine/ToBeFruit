<?php
/**
 * Created by PhpStorm.
 * User: AlexisKD
 * Date: 09/06/15
 * Time: 09:36
 */


function results($search){
    include 'connect.php';
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

?>