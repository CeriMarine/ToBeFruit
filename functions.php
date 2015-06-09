<?php
/**
 * Created by PhpStorm.
 * User: AlexisKD
 * Date: 09/06/15
 * Time: 09:36
 */
include 'connect.php';

function results($search){

    $search = preg_split('/[\s\-]/',$search);

    $count_keywords = count($search);

    print_r($count_keywords);

    foreach($search as $key=>$searches){

        $where .= "membre LIKE '%$searches%'";
        if($key != ($count_keywords-1)){

            $where .="AND";
        }
    }
    $query = mysql_query("SELECT * FROM membres WHERE $where");
    $rows = mysql_num_rows($query);
    if($rows){
        while($membre_pseudo = mysql_fetch_assoc($query)){

            echo"<strong>".$membre_pseudo["membre_pseudo"]."</strong><br/><u>Email:</u><br/>".$membre_pseudo["membre_email"]."<br/>Adresse:".$membre_pseudo['membre_msn'];
        }

    }else{

        echo 'Pas de résultat trouvé...';
    }
}

?>