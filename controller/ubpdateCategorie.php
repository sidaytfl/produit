
<?php 
// echo'<pre>';
// print_r($_POST);
// echo'<pre>'; 
require_once('../database/cnx.php');
if (isset($_POST['valider'])) {
    $nom=$_POST['categorieP'];
    $description=$_POST['description'];
    $id=$_POST['idC'];
    $sql="UPDATE categorie SET categorieP='$nom',descriptione='$description' WHERE idC=$id";
    $result=$db->query($sql);
    if ($result===false) {
        die("erreur du preparation du requete".$db->error);
    }else{
        echo"
        <script>
            alert('Mise a jour avec succee !');
            window.location='../views/listcategorie.php';
        </script>";
    }
}
?>