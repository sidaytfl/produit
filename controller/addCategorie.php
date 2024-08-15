<?php 
require_once('../views/bootstrap.php');
require_once('../database/cnx.php');
if(isset($_POST['valider'])){
    $nom=$_POST['categorieP'];
    $description=$_POST['description'];
    $sql="INSERT INTO categorie (categorieP,descriptione)VALUES('$nom','$description')";
    $result=mysqli_query($db,$sql);
    if($result){
        echo"<script>
        alert('Ajouter avec succee !');
        window.location='../views/listcategorie.php';
    </script>";
   
    }}
    ?>
