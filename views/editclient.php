<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de client</title>
    <?php 
    require_once('../database/cnx.php');
    require_once('bootstrap.php');
    ?>
</head>
<body>
    <?php 
        $id=$_GET['id'];
        $sql="SELECT * FROM clients WHERE id_client=$id";
        $result=mysqli_query($db,$sql);
        while($row=mysqli_fetch_row($result)){
            $id=$row[0];
            $nom=$row[1];
            $prenom=$row[2];
            $email=$row[3];
            $numero=$row[4];
            $pays=$row[5];
            $ville=$row[6];
            $datemodif=$row[8];
        }
        ?>
        <div class="container">
        <div class="card card-center">
            <div class="card-header bg-primary">
                <h3 class="card-title text-center">Formulaire de modification de Client</h3>
            </div><hr>
            <div class="card-body">
                <form class="row g-2" enctype="multipart/form-data" action="../controller/updateClient.php" method="post">
                
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group ">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <label for="" class="label-form">Nom:</label>
                        <input type="text" name="nomC" value="<?=$nom?>" class="form-control col-lg-6 " placeholder="Nom" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Prenom:</label>
                        <input type="text" name="prenomC"value="<?=$prenom?>" class="form-control col-lg-6 " placeholder="Prenom" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Email:</label>
                        <input type="email" name="emailC" value="<?=$email?>" class="form-control col-lg-6 " placeholder="Email" required>
                    </div>                    
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 from-group">
                        <label for="" class="label-form">Numero du telephone:</label>
                        <input type="text" value="<?=$numero?>" name="NumeroTelephone" class="form-control col-lg-6 " placeholder="Numero Telephone" required>
                    </div>                    
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Pays:</label>
                        <input type="text" value="<?=$pays?>" name="pays" class="form-control col-lg-6 " placeholder="Pays" required>
                    </div>                  
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Ville:</label>
                        <input type="text" value="<?=$ville?>" name="ville" class="form-control col-lg-6 " placeholder="Ville" required>
                    </div>  
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 form-group">
                        <label for="" class="label-form">Date de modification :</label>
                        <input type="datetime-local" value="<?=$datemodif ?>" name="datemodif" class="form-control col-lg-6 " placeholder="Ville" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="valider" class="btn btn-primary col-lg-3 ">Valider</button>
                        <button type="reset" class=" btn btn-danger col-lg-3 ml-auto">Annuler</button>
                    </div>  
                        
                </form>
            </div>
        </div>
    </div>
</body>
</html>