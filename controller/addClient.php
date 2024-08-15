<?php 
require_once('../database/cnx.php');
if(isset($_POST['valider'])){
    $nomC=$_POST['nomC'];
    $prenomC=$_POST['prenomC'];
    $emailC=$_POST['emailC'];
    $NumeroTelephone=$_POST['NumeroTelephone'];
    $pays=$_POST['pays'];
    $ville=$_POST['ville'];
    $sql="INSERT INTO clients (nom_client,prenom_client,email_client,numtel_client,pays_client,ville_client)
    VALUES('$nomC','$prenomC','$emailC','$NumeroTelephone','$pays','$ville')";
    $result=mysqli_query($db,$sql);
    if($result){
        echo"<script>
        alert('Ajout avec succee !');
        window.location='../views/listclient.php';
    </script>";
   
    }}
    ?>