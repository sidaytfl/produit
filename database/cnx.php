<?php 
$serveur='localhost';
$user='root';
$password='';
$dbname='gestionproduit';
$db =mysqli_connect($serveur,$user,$password,$dbname);
if (!$db) {
     echo "connexion echoue";
}
?>