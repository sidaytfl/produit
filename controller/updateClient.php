<?php 
require_once('../database/cnx.php');
if (isset($_POST['valider'])) {
    $id=$_POST['id'];
    $nom=$_POST['nomC'];
    $prenom=$_POST['prenomC'];
    $email=$_POST['emailC'];
    $numero=$_POST['NumeroTelephone'];
    $pays=$_POST['pays'];
    $ville=$_POST['ville'];
    $dateajout=$_POST['datemodif'];
    $sql="UPDATE clients SET nom_client='$nom',prenom_client='$prenom',email_client='$email',numtel_client='$numero',pays_client='$pays',ville_client='$ville',date_modification='$dateajout' WHERE id_client=$id";
    $result=$db->query($sql);
    if ($result===false) {
        die("erreur du preparation du requete".$db->error);
    }else{
        echo"
        <script>
            alert('Mise a jour avec succee !');
            window.location='../views/listclient.php';
        </script>";
   
    }
    
}
?>