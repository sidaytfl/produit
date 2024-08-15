<?php
require_once('../database/cnx.php');
$id=$_GET['id'];
$req="DELETE FROM produits WHERE idP= ? ";
$res = $db->prepare($req);
$res->bind_param('i',$id);
$res->execute();
if($res->execute()){
    echo"
    <script>
    alert('Suppression avec succee !');
    window.location='../views/listproduct.php';
    </script>";
}
?>