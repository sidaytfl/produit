<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients</title>
    <?php
    $clients=true;
    require_once('../database/cnx.php');
    require_once('bootstrap.php');
    require_once('header.php');
    ?>
</head>
<body>
    <div class="container card">
        <div class="card-header">
            <h2 class="card-title text-center">Liste des clients</h2>
            <a href="addclient.php" class="btn btn-primary ml-auto" style="width: 200px;align-items:right;margin:10px;">Ajouter client</a>
        </div><hr>
        <div class="card-body">
            <table class="table table-secondary">
                <thead class="table-header table-dark">
                    <!-- <th>#</th> -->
                    <th>nom & prenom</th>
                    <th>Email</th>
                    <th>Numero Telephone</th>
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>date d'ajout</th>
                    <th>date du dernier modification</th>
                    <th>Action</th>
                </thead>
                <tbody class="table-body">
                    <tr>
                        <?php 
                        
                        require_once('../database/cnx.php');
                        require_once('bootstrap.php');
                        $sql="SELECT * FROM clients order by nom_client";
                        $rs=mysqli_query($db,$sql);
                        while($row=mysqli_fetch_row($rs)){
                            $id=$row[0];
                            $nom=$row[1];
                            $prenom=$row[2];
                            $email=$row[3];
                            $numero=$row[4];
                            $pays=$row[5];
                            $ville=$row[6];
                            $dateajout=$row[7];
                            $datemodif=$row[8];
                        ?>
                        <tr>
                        <!-- <td><img class='rounded-circle' width='40' src=<?=$image?> alt=''></td> -->
                        <!-- <td><?=$id?></td> -->
                        <td><?=$nom.' '.$prenom?></td>
                        <td><?=$email?></td>
                        <td><?=$numero?></td>
                        <td><?=$pays?></td>
                        <td><?=$ville?></td>
                        <td><?=$dateajout?></td>
                        <td><?=$datemodif?></td>
                        <td>
                            <a href="editclient.php?id=<?=$id?>"><i class="fa-solid fa-pen-to-square"style="color:blue;width:30px; font-size: 18px;"></i></a>
                            <a href="deleteclient.php?id=<?=$id?>"   onclick="confirmdelet(<?= $id ?>)"><i class="fa-sharp fa-solid fa-trash" style="color:#ff0000;font-size: 18px;"></i></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>