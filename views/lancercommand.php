<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture d'une Commande</title>
    <?php require_once('bootstrap.php');
        require_once('listcommand.php');
    ?>

</head>
<body>
    <div class="container">
        <div>
`           <? echo date('YmdHis');?>
        </div>
        <div>
`           <p class="text-right">Facture</p>
        </div>
        <div class="card-title text-center">
            <p>ECPEM2</p>
        </div>
    </div>
    <?php 
require_once('../database/cnx.php');
$id=$_GET['id'];
$sql="SELECT * FROM commandes WHERE idCm= $id";
$rs=mysqli_query($db,$sql);
while ($row=mysqli_fetch_row($rs)) {
    $nom=$row[1];
    $categorie=$row[2];
    $produit=$row[3];
    $prix=$row[4];
    $quantite=$row[5];
    $totale=$row[6];
}
?>
</body>
</html>
