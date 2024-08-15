<?php 
require_once('../database/cnx.php');
if (isset($_POST['valider'])) {
    $id=$_POST['id'];
    $nomclient=$_POST['client'];
    $categorie=$_POST['categorie'];
    $produit=$_POST['produit'];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];
    $totale=$prix * $quantite;
    $sql="UPDATE commandes SET client='$nomclient',categorie='$categorie',produit='$produit',prix=$prix,quantite=$quantite,totale=$totale WHERE idCm= $id ";
    $result = $db->query($sql);
    if($result===false){
        die("erreur du preparation du requete".$db->error);
    }
    else{
        echo "
        <script> 
            alert('Mise a jour fait avec succee!');
            window.location='../views/listcommand.php';
        </script>";
    }
}
?>