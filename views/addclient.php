<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
    <?php require_once('bootstrap.php');
        require_once('header.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="card card-center">
            <div class="card-header bg-primary">
                <h3 class="card-title text-center">Formulaire d'Ajout de Client</h3>
            </div><hr>
            <div class="card-body">
                <form class="row g-2" enctype="multipart/form-data" action="../controller/addClient.php" method="post">
                
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group ">
                        <label for="" class="label-form">Nom:</label>
                        <input type="text" name="nomC" class="form-control " placeholder="Nom" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Prenom:</label>
                        <input type="text" name="prenomC" class="form-control" placeholder="Prenom" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Email:</label>
                        <input type="text" name="emailC" class="form-control" placeholder="Email" required>
                    </div>                    
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Numero du telephone:</label>
                        <input type="text" name="NumeroTelephone" class="form-control" placeholder="Numero Telephone" required>
                    </div>                    
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Pays:</label>
                        <input type="text" name="pays" class="form-control" placeholder="Pays" required>
                    </div>                  
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Ville:</label>
                        <input type="text" name="ville" class="form-control" placeholder="Ville" required>
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