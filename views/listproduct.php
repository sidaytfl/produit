<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listes des produit</title>
  <?php require_once('bootstrap.php');require_once('header.php'); ?>
</head>
<body>
  <div class="container card ">
<table class="table">
  <div class="card card-header">
    <h2 class="card-title text-center">All Products</h2>
    <a href="addproduct.php" class="btn btn-primary "style="width: 200px;align-items:right;margin:10px;">Ajouter Produit</a>
  </div><hr>
  <thead class="table">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Nom du produit</th>
      <th scope="col">Prix</th>
      <th scope="col">َQuantite</th>
      <th scope="col">Categorie</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="bg-light">
    <tr>
      <?php 
      require_once('../database/cnx.php');
      $req = "SELECT * FROM produits ";
      $rs=mysqli_query($db,$req);
      while($row=mysqli_fetch_row($rs)){
      $id=$row[0];
      $nomP=$row[1];
      $prixP=$row[2];
      $quantiteP=$row[3];
      $categorieP=$row[4];
      $image=$row[5];
      var_dump($image);
      die();
      ?>
      <tr>
          <td><img  src="<?php echo $row[5] ?>" width="100" height="100" alt=''></td>
          <td><strong><?=$id?></strong></td>
          <td><strong><?= $nomP ?></strong</td>
          <td><strong><?=$prixP?></strong></td>
          <td><strong><?=$quantiteP?></strong></td>
          <td><strong><?=$categorieP?></strong></td>
          <td>
            <a href='editproduct.php?id=<?=$id?>'><i class="fa-solid fa-pen-to-square"style="color:blue;width:30px; font-size: 18px;"></i></a>
            <a href='deleteproduct.php?id=<?=$id?>'   onclick="confirmdelet(<?= $id ?>)"><i class="fa-sharp fa-solid fa-trash" style="color:#ff0000;font-size: 18px;"></i></a>
          </td>
    </tr>  <?php };
      ?>
    </tr>
  </tbody>
</table>
</div>
<!-- <?php require_once('footer.php');?> -->

</body>
</html>
