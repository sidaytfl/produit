<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Commands</title>
    <?php
    $commandes=true;
    require_once('../database/cnx.php') ;
        require_once('bootstrap.php');
        require_once('header.php');
    ?>

</head>
<body>
    <div class="card container">
        <div class="card-header">
            <h2 class="card-title text-center">Liste des Commandes</h2>
            <a href="addcommand.php" class="btn btn-primary ml-auto" style="width: 200px;align-items:right;margin:10px;">Crée Une Commande</a>
        </div>
        <div class="card-body">
            <table class="table bg-scondary">
                <thead class="table-header table-dark">
                    <th>#</th>
                    <th>Nom Client</th>
                    <th>Categorie</th>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Totale</th>
                    <th>Action</th>
                    <th>Facture</th>
                </thead>
                <tbody class="table-body">
                    <tr>
                        <?php 
                         require_once('../database/cnx.php');
                         $sql="SELECT * FROM commandes order by client";
                        $rs=mysqli_query($db,$sql);
                        while ($row=mysqli_fetch_row($rs)) {
                            $id=$row[0];
                            $nom=$row[1];
                            $categorie=$row[2];
                            $produit=$row[3];
                            $prix=$row[4];
                            $quantite=$row[5];
                            $totale=$row[6];
                            ?>
                        <tr>
                        <td><?=$id?></td>
                        <td><?=$nom?></td>
                        <td><?=$categorie?></td>
                        <td><?=$produit?></td>
                        <td><?=$prix?></td>
                        <td><?=$quantite?></td>
                        <td><?=$totale?></td>
                        <td>
                            <a href="editcommand.php?id=<?=$id?>"><i class="fa-solid fa-pen-to-square" style="color: blue;width:30px; font: size 18px;"></i></a>
                            <a href="deletecommand.php?id=<?=$id?>" onclick="confirmdelet(<?= $id?>)"><i class="fa-solid fa-trash fa-sharp" style="color: #ff0000;font: size 18px;"></i></a>
                        </td>
                        <td><a href="lancercommand.php?id=<?=$id?>" onclick="confirmdelet(<?=$id?>)" class="btn btn-success">Lancer</a></td>
                    </tr>
                    <?php }?>
                    </tr>
                    
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>