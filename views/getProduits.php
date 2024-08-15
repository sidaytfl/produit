<?php
require_once('../database/cnx.php');
require_once('bootstrap.php');

if (isset($_POST['categorie'])) {
    $categorie = $_POST['categorie'];
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $sql = "SELECT * FROM produits WHERE categorieP = '$categorie'";
    $result = mysqli_query($db, $sql);
    if ($result) {
        while ($row = mysqli_fetch_row($result)) {
            $nom = $row[1];
            echo "<option value='$nom'>$nom</option>";
        }
    } else {
        echo "Erreur dans la requête SQL: " . mysqli_error($db);
    }
} else {
    echo "Aucune catégorie reçue";
}

?>
