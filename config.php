<?php

/******** CONFIGURATION POUR CONNEXION A LA BDD *******/
/* à inclure sur toutes les pages */

try {
    $db = new PDO('mysql:host=localhost;dbname=ToBeFruit;charset=utf8','root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}

?>