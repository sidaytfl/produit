<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Categorie</title>
    <?php require_once('bootstrap.php');
          require_once('header.php');
    ?>
</head>
<body>
    <div class="container card card-center  bg-dark text-white">
            
                <div class="card-header text-dark text-center bg-light">
                    <h2><strong>Formulaire d'ajout de Categorie</strong></h2>
                </div><hr>
                <div class="card-body">
                        <form enctype="multipart/form-data" class="row g-2" action="../controller/addCategorie.php" method="post">

                            <label for="n" class="form-label"><strong>Nom:</strong> </label>
                            <input class="form-control" type="text" required name="categorieP" placeholder="Nom" id="n">
                            <label class="form-label" for="des"><strong>Description</strong> </label>
                            <textarea class="form-control" required placeholder="Description sur le categorire ajouter" name="description" id="des" cols="30" rows="10"></textarea>
                            
                            <div class="d-flex justify-content-between">
                                <button type="submit" name="valider" class="btn btn-primary col-lg-3 "style="margin-top:10px">Valider</button>
                                <button type="reset" class=" btn btn-danger col-lg-3 ml-auto"style="margin-top:10px">Annuler</button>
                            </div>
                            
                        </form>
                </div>
            
    </div>
</body>
</html>