<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('bootstrap.php'); 
    require_once('header.php');
    ?>
    <!-- <style>
        .card-center{
            display:flex;
        }
    </style> -->
    <title>Ajouter Produit</title>
</head>
<body>
    <div class="container card card-center  bg-dark text-white">
        <form class="row g-2" enctype="multipart/form-data" action="../controller/addProduct.php" method="post">
        <div class="card-header  text-dark text-center bg-light"><h2><strong>Formulaire d'Ajout du produit</strong></h2></div><hr>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label class="form-label">Nom du Produit:</label>
            <input type="text" class="form-control" name="nomP" placeholder="Nom"  required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label for="validationCustom04" class="form-label">Categorie:</label>
            <select class="form-select" name="categorieP"  required>
            <?php
                     require_once('../database/cnx.php');
                    $req="SELECT * FROM categorie";
                    $res=mysqli_query($db,$req);
                    while($row=mysqli_fetch_row($res)){
                        $nom=$row[1];
                    echo"<option value='$nom'>$nom</option>";}?>
            </select>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label  class="form-label">Prix:</label>
            <input type="text" class="form-control" name="prixP" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label  class="form-label">Quantite:</label>
            <div class="input-group has-validation">
            <input type="text" class="form-control" name="quantiteP"  required>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-12 col-sm-12 fallback w-100 form-group">
                <input type="file" class="form-control" name='image' accept="image/*" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" name="valider" class="btn btn-primary col-lg-3 "style="margin-top:-10px">Valider</button>
            <button type="reset" class=" btn btn-danger col-lg-3 ml-auto"style="margin-top:-10px">Annuler</button>
        
        </div>
        </form>
    </div>
</body>
</html>
