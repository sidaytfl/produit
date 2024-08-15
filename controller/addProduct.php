<?php 
 require_once('../database/cnx.php');  
 require_once('../views/bootstrap.php'); 
if(isset($_POST['valider'])){
    $nomP=$_POST['nomP'];
    $prixP=$_POST['prixP'];
    $quantiteP=$_POST['quantiteP'];
    $categorieP=$_POST['categorieP'];
    $image=$_FILES['image'];
    // print_r($_FILES['image']);
    $tempname=$_FILES['image']['tmp_name'];
    $file_name=$_FILES['image']['name'];
    $folder='Images/'.$file_name;
    move_uploaded_file($tempname,$folder);
    $sql="INSERT INTO produits (nomP,prixP,quantiteP,categorieP,images) VALUES('$nomP',$prixP,$quantiteP,'$categorieP','$folder')";  
    $result=mysqli_query($db,$sql);
    if($result){
        echo"
        <script>
        alert('Ajout avec succee !');
        window.location='../views/listproduct.php';
        </script>";
    }else{
        echo"
        <script>
        alert('Ajout echouee.');
        window.location='../views/listproduct.php';
        </script>";
    }
    }
    
    
    ?>