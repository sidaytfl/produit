<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Produit</title>
</head>
<body>
    <?php 
require_once('bootstrap.php');
require_once('../database/cnx.php');
$id=$_GET['id'];
$req="SELECT * FROM produits WHERE idP = $id";
$rs=mysqli_query($db,$req);
while($row=mysqli_fetch_row($rs)){
    $id=$row[0];
    $nomP=$row[1];
    $prixP=$row[2];
    $quantiteP=$row[3];
    $categorieP=$row[4];
    $image=$row[5];
    }
?>
<div class="container card card-center  bg-dark text-white">
        <form class="row g-2 " action="../controller/updateProduct.php" method="post">
        <div class="card-header  text-dark text-center bg-light"><h2>Formulaire d'edidtion</h2></div><hr>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label class="form-label">Id</label>
            <input type="text" class="form-control" value="<?= $id ?>" name="idP" placeholder="id"  >
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label class="form-label">Nom du Produit</label>
            <input type="text" class="form-control" value="<?= $nomP ?>" name="nomP" placeholder="Nom"  required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label  class="form-label">Prix</label>
            <input type="number" value="<?= $prixP ?>" class="form-control" name="prixP" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label  class="form-label">Quantite</label>
            <div class="input-group has-validation">
            <input type="number" class="form-control" value="<?= $quantiteP ?>" name="quantiteP"  required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label for="validationCustom04" class="form-label">Categorie</label>
            <select class="form-select" name="categorieP"  required>
            <option selected  value="<?= $categorieP ?>"><?= $categorieP ?></option>
            <?php
                     require_once('../database/cnx.php');
                    $req="SELECT * FROM categorie";
                    $res=mysqli_query($db,$req);
                    while($row=mysqli_fetch_row($res)){
                        $nom=$row[1];
                    echo"<option value='$nom'>$nom</option>";}?>
            </select>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 fallback w-100 form-group">
                <input type="file" class="form-control" value="<?= $image?>" name='image' accept="image/*" required>
        </div>
            <button class="col-lg-6 col-md-6 col-sm-12 btn btn-primary btn-block" name="valider"  type="submit">Valider</button>
            <button class="col-lg-6 col-md-6 col-sm-12 btn btn-info"  type="reset">Annuler</button>
        </form>
</div>
</body>
</html>
