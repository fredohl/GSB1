﻿ Programme d'actualisation des lignes des tables,  
 cette mise à jour peut prendre plusieurs minutes...
<?php
include("include/fct.inc.php");

/* Modification des paramètres de connexion */

$serveur='oci:dbname=172.16.5.77:1521/xe';
//$bdd='dbname=gsbV2';   		
$user='utilisateur' ;    		
$mdp='utilisateur' ;	

/* fin paramètres*/

$pdo = new PDO($serveur, $user, $mdp);
$pdo->query("SET CHARACTER SET utf8"); 

set_time_limit(0);
creationFichesFrais($pdo);
creationFraisForfait($pdo);
creationFraisHorsForfait($pdo);
majFicheFrais($pdo);

?>