<?php 
    require_once('../database/cnx.php');
    if (isset($_POST['valider'])) {
        $id=$_POST['id'];
        $nomclient=$_POST['client'];
        $categorie=$_POST['categorie'];
        $produit=$_POST['produit'];
        $prix=$_POST['prix'];
        $sql1="SELECT  prixP FROM produits WHERE prixP >= $prix";
        $result1=$db->query($sql1);
        $quantite=$_POST['quantite'];
        $sql2="SELECT  quantiteP FROM produits WHERE quantiteP >= $quantite";
        $result2=$db->query($sql2);
        if ($result1 && $result2) {
            $totale=$prix * $quantite; 
            $sql="INSERT INTO commandes(idCm,client,categorie,produit,prix,quantite,totale) VALUES ('$id','$nomclient','$categorie','$produit',$prix,$quantite,$totale)";
            $result=$db->query($sql);
            if ($result===false) {
            echo "Error ".$db->error;
            }
            else{
                echo "
                <script> 
                    alert('Insertion avec succee');
                    window.location='../views/listcommand.php';
                </script>
                ";
            }
            }else{
                echo "<script> 
                    alert('Hhhh erreur avec succee');
                </script>";
            }
        // $totale=$_POST['totale'];
       
    }
?>