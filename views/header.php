<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? require_once('bootstrap'); ?>
    <style>
      .recherche{
        display: flex;
        justify-content: flex-start; 
        align-content: flex-end;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a href="home.php" class="navbar-brand">Application Gestion de Produit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a href="home.php" class="nav-link <?php echo !empty($home)? "active":"" ?>"aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a href="listcommand.php" class="nav-link <?php echo !empty($commandes)? "active":"" ?>">List Commands</a>
            </li>
            <li class="nav-item">
                <a href="listclient.php" class="nav-link <?php echo !empty($clients)? "active":"" ?>">List Clients</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link <?php echo !empty($contactus)? "active":"" ?>">Contact Us</a>
            </li>
        </ul>
      <!-- <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        <a class="nav-link" href="articles.php">Arcticles</a>
        <a class="nav-link" href="#">Pricing</a> -->
    <div class="recherche">
        <input type="text" name="recherche"style="align-content: right;" class="form-control "placeholder="Search">
        <button class="btn btn-success" type="submit">Chercher</button>
    </div>
      </div>
    </div>
  </div>
</nav>

</body>
</html>