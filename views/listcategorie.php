<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Categorie</title>
    <?php require_once('bootstrap.php'); require_once('header.php');?>
</head>
<body>
    <div class="container card">
        <div class="card-header bg-light">
            <h2 class="card-title text-center">Liste de Categorie</h2>
            <a href="addcategorie.php" class="btn btn-primary "style="width: 200px;align-items:right;margin:10px;">Ajouter Categorie</a>
        </div><hr>
        <div class="table">
                <table class="table bg-light">
                    <thead class="table-header bg-dark text-white">
                        <!-- <th>Id</th> -->
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="table-body">
                            <tr>
                                <?php require_once('../database/cnx.php');
                                    $sql="SELECT * FROM categorie order by categorieP";
                                    $rs=mysqli_query($db,$sql);
                                    while($row=mysqli_fetch_row($rs)){
                                        $id=$row[0];
                                        $nom=$row[1];
                                        $description=$row[2]; ?>
                                        <tr>
                                            <!-- <td><strong><?=$id?></strong></td> -->
                                            <td><strong><?=$nom?></strong></td>
                                            <td><strong><?=$description?></strong></td>
                                            <td>
                                            <a href='editcategorie.php?id=<?=$id?>'><i class="fa-solid fa-pen-to-square"style="color:blue;width:30px; font-size: 18px;"></i></a>                                              
                                            <a href='deletecategorie.php?id=<?=$id?>'  onclick="confirmdelet(<?= $id ?>)"><i class="fa-sharp fa-solid fa-trash" style="color:#ff0000;font-size: 18px;"></i></a>                                               
                                            </td>
                                        </tr>
                                    <?php }?>
                               
                            </tr>
                    </tbody>

                </table>

            </div>
    </div>
    
</body>
</html>