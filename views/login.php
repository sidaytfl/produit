<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once('bootstrap.php');?>
  <title>Authentification</title>
</head>
<body class="container "style="padding:30px;">
  <div class="container card card-center card bg-light mb-6 text-dark " style="width: 480px; height:auto ;display: flex;">
    <div class="card-body ">
      <div class="card-header bg-dark text-white" style="text-align:center;">Page d'authentification</div>
      <form class="row" action="../controller/authentificatelogin.php" method="post">
      <div class="mb-4">
        <label >Nom d'utilisateur</label>
        <input type="text" name="user" required class="form-control" placeholder="utilisateur">
      </div>  
      
      <div class="mb-4">
        <label  class="form-label">Mot de passe</label>
        <input type="password" name="pass" required class="form-control" placeholder="password">
      </div>
      <div class="d-flex justify-content-between">
          <button type="submit" name="valider" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger ml-auto">Annuler</button>
    </div>
      
      </form>
    </div>
  </div>
</body>
</html>
