<?php
// echo'<pre>';
// print_r($_POST);
// echo'<pre>'; 
require_once('../database/cnx.php');
if (isset($_POST['valider'])) {   
    $nomP=$_POST['nomP'];
    $prixP=$_POST['prixP'];
    $quantiteP=$_POST['quantiteP'];
    $categorieP=$_POST['categorieP'];
    $id=$_POST['idP'];
    $sql = "UPDATE produits SET nomP=?,prixP=?,quantiteP=?,categorieP=? WHERE idP=?";
    $result = $db->prepare($sql);
    if ($result === false) {
        die("erreur du preparation du requete".$db->error);
    }
    $result->bind_param('sdisi',$nomP,$prixP,$quantiteP,$categorieP,$id);
        $rs=$result->execute();
        if($rs){
            echo"
            <script>
            alert('Mise a jour avec succee !');
            window.location='../views/listproduct.php';
            </script>";
    }
   }
?>