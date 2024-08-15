<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une command</title>
    <?php 
    require_once('../database/cnx.php');
    require_once('bootstrap.php');
    require_once('header.php');
?>
</head>
<body>
    <?php 
    $id=$_GET['id'];
    $sql="SELECT * FROM commandes WHERE idCm =$id";
    $rs=mysqli_query($db,$sql);
    while($row=mysqli_fetch_row($rs)){
        $id=$row[0];
        $nom=$row[1];
        $categorie=$row[2];
        $produit=$row[3];
        $prix=$row[4];
        $quantite=$row[5];
        $totale=$row[6];
    }
    ?>
    <div class="container">
        <div class="card">
            <div class="bg-primary card-header">
                <h3 class="card-title text-center text-white">Formulaire de Commande</h3>
            </div><hr>
            <div class="card-body">
                <form class="row g-2"enctype="multipart/form-data"   action="../controller//updateCommand.php" method="post">
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <label for="client" class="label-form">Client:</label>
                        <select class="form-select"  name="client" id="client">
                            <option selected value="<?=$nom ?>"><?=$nom ?></option>
                            <?php 
                                $sql="SELECT * FROM clients ";
                                $result=mysqli_query($db,$sql);
                                while($row=mysqli_fetch_row($result)){
                                    $nom=$row[1];
                                    $prenom=$row[2];
                                echo"<option value='$nom'.' $prenom'>$nom $prenom</option>";}
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="">Categorie:</label>
                        <select class="form-select" name="categorie" id="" onclick="confirmdelet(<?= $nom ?>)">
                                <option selected value="<?=$categorie?>"><?=$categorie ?></option>
                                <?php
                                $sql="SELECT * FROM categorie";
                                $result=mysqli_query($db,$sql);
                                while($row=mysqli_fetch_row($result)){
                                    $id=$row[0];
                                    $nom=$row[1];
                                    echo"<option value='$nom'>$nom</option>";
                                }
                                 ?>
                            </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="produit" class="form-label">Produit:</label>
                        <select class="form-select" name="produit" id="">
                                <option selected value="<?=$produit ?>"><?=$produit ?></option>
                                <?php
                                $sql="SELECT * FROM produits";
                                $result=mysqli_query($db,$sql);
                                while($row=mysqli_fetch_row($result)){
                                    $nom=$row[1];
                                    echo"<option value='$nom'>$nom</option>";
                                }
                                 ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label for="" class="form-label">Prix:</label>
                            <input class="form-control" value="<?=$prix?>" type="text" name="prix" required placeholder="Prix">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label for="" class="form-label">Quantite:</label>
                            <input class="form-control" value="<?=$quantite?>" type="text" name="quantite" required placeholder="Quantite">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="valider" class="btn btn-primary col-lg-3 "style="margin-top:-10px">Valider</button>
                        <button type="reset" class=" btn btn-danger col-lg-3 ml-auto"style="margin-top:-10px">Annuler</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</body>
</html>