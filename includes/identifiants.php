<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 15/04/2015
 * Time: 13:52
 */
                    /*Connexion MySQL*/
$host='localhost';
$nom_bd='ToBeFruit';
$user='root';
$mdp='root';

$db = new PDO('mysql:host='.$host. '; dbname='.$nom_bd, $user, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) or die('Connection serveur et BD impossible');
// array() pour que toutes les requêtes SQL qui comportent des erreurs soit affichées avec un message beaucoup plus clair par php.
?>