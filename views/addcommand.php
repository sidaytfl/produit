<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Command</title>
    <?php require_once('bootstrap.php'); 
     require_once('../database/cnx.php');
     require_once('header.php');
     global $date;
     $date=date('YmdHis');
     ?>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="bg-primary card-header">
                <h3 class="card-title text-center text-white">Formulaire de Commande</h3>
            </div><hr>
            <div class="card-body">
                <form class="row g-2"enctype="multipart/form-data"   action="../controller//addCommand.php" method="post">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="client" class="label-form">Client:</label>
                        <input type="hidden" name="id" value="<?php echo "ID: ".$date?>">
                        <select class="form-select" name="client" id="client">
                            <?php 
                                $sql="SELECT * FROM clients ";
                                $result=mysqli_query($db,$sql);
                                while($row=mysqli_fetch_row($result)){
                                    $nom=$row[1];
                                    $prenom=$row[2];
                                echo"<option value='$nom $prenom'>$nom $prenom</option>";}
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="">Categorie:</label>
                        <select class="form-select" name="categorie" id="">
                                <?php  global $nomc;
                                $sql="SELECT * FROM categorie";
                                $result=mysqli_query($db,$sql);
                                while($row=mysqli_fetch_row($result)){
                                    $id=$row[0];
                                    $nomc=$row[1];
                                    echo"<option value='$nomc'>$nomc</option>";
                                }
                                 ?>
                            </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="produit" class="form-label">Produit:</label>
                        <select class="form-select" name="produit" id="">
                                <?php global $nom;
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
                            <input class="form-control" type="text" name="prix" required  placeholder="Prix">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                
                            <label for="" class="form-label">Quantite:</label>
                            <input class="form-control" type="text"name="quantite" required placeholder="Quantite">
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                
                            <label for="" class="form-label">Totale:</label>
                            <input class="form-control" type="text" name="totale"  required placeholder="Totale">
                    </div> -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="valider" class="btn btn-primary col-lg-3 "style="margin-top:-10px">Cree Une Commande</button>
                        <button type="reset" class=" btn btn-danger col-lg-3 ml-auto"style="margin-top:-10px">Annuler</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>   
</body>
</html>
