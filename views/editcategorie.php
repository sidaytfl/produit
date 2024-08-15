<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une categorie</title>
</head>
<body>
    <?php 
    require_once('bootstrap.php');
    require_once('../database/cnx.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM categorie WHERE idC = $id";
    $result=mysqli_query($db,$sql);
    while ($row=mysqli_fetch_row($result)) {
        $id=$row[0];
        $nom=$row[1];
        $description=$row[2];
    }
    ?>  
<div class="container card card-center  bg-dark text-white">
        <form class="row g-2" enctype="multipart/form-data" action="../controller/ubpdateCategorie.php" method="post">
        <div class="card-header"><h2 class="card-title"> Formulaire de modification d'une categorie</h2></div><hr> 
        <label for="" class="form-label">ID:</label>
        <input type="text" class="form-control" value="<?= $id ?>" name="idC">
        <label for="n" class="form-label"><strong>Nom:</strong> </label>
        <input class="form-control" type="text" value="<?= $nom ?>" required name="categorieP" placeholder="Nom" id="n">
        <label class="form-label" for="des"><strong>Description</strong> </label>
        <textarea class="form-control"  required placeholder="Description sur le categorire ajouter" name="description" id="des" cols="30" rows="10"><?= $description ?></textarea>
        <div class="card-footer ">
        
        <button class=" col-lg-5 col-md-5 col-sm-12 btn btn-primary btn-block"style="margin-top:-10px" name="valider" type="submit">Valider</button>
        
        <div class="text-right">
        <button class=" col-lg-5 col-md-5 col-sm-12 btn btn-danger"style="margin-top:-10px" type="reset">Annuler</button>
        </div>
        </div>
        </form>
    </div> 
</body>
</html>

