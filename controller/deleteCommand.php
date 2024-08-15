<?php 
require_once('../database/cnx.php');
$id=$_GET['id'];
$sql="DELETE FROM commandes WHERE idCm = '$id'";
$result=$db->query($sql);
if ($result===false) {
    echo "erreur ".$db->error;
}
else{
    echo "<script> 
    alert('Suppression avec succee');
    window.location='../views/listcommand.php';
</script>";
}
?>