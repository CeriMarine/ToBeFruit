<?php
/**
 * Created by PhpStorm.
 * User: AlexisKD
 * Date: 02/06/15
 * Time: 11:26
 */
// connexion à la base de donnée
try{
    $db = new PDO('myql:host=localhost;dbname=ToBeFruit','root','root');
} catch (PDOException $e) {
    die('Erreur :'.$e->getMessage());
}
?>