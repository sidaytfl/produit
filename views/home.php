
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('bootstrap.php'); ?>
    <title>Page Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0-beta3/css/all.min.css">

</head>
<body>
    <?php $home=true;
    require_once('header.php');
        require_once('../database/cnx.php');
        
        $totaleProdiut=$db->query("SELECT COUNT(*) AS totalp FROM produits")->fetch_assoc()['totalp'];
        $totaleClient=$db->query("SELECT COUNT(*) AS totalc FROM clients")->fetch_assoc()['totalc'];
        $totaleCategorie=$db->query("SELECT COUNT(*) AS totalca FROM categorie")->fetch_assoc()['totalca'];
        $totaleCommand=$db->query("SELECT COUNT(*) AS totalcom FROM commandes")->fetch_assoc()['totalcom']
    ?>
    
        <div class="container card  "style="marging:30%;padding: 4%;" for="p">
            <div class="card card-header text-white bg-primary" for="p">
                <div class=" text-white "for="p">
                <a href="listproduct.php" id="p" class="text-white"style="text-decoration:none"><i id="p" class="fa-solid fa-cart-shopping"style="font-size: 28px;"></i><h4 class="text-center">Totales Produits <?php echo $totaleProdiut; ?></h4></a> 
                </div>
            </div>
        </div>
        <div class="container card "style="marging:30%;padding: 4%;" for="w">    
            <div class="card bg-warning text-white" for="w">
                <div class="card card-header " for="w">
                    <a href="listClient.php" id="p" class=" text-white" style="text-decoration:none"><i class="fas fa-users"style="font-size: 28px;"></i><h4 class=" text-center">Totales Clients <?php echo $totaleClient;?></h4></a>
                </div>
            </div>
        </div>
        <div class="container bg-none card"style="marging:30%;padding: 4%;"for="g">
                <div class="card card-header bg-success "for="g">
                <a href="listCategorie.php" class="text-white" id="g" style="text-decoration:none"><i class="fa-solid fa-layer-group"style="font-size: 28px;"></i><h4 class="text-center">Totales Categories <?php echo $totaleCategorie;?></h4></a>
                </div>
        </div>
        <div class="container bg-none card"style="marging:30%;padding: 4%;"for="g">
            <div class="card card-header bg-danger "for="g">
            <a href="listCommand.php" class="text-white" id="g" style="text-decoration:none"><i class="fa fa-dollar"style="font-size: 28px;"></i><h4 class="text-center">Totales Commandes <?php echo $totaleCommand;?></h4></a>
            </div>
        </div>
</body>
</html>
