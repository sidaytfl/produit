<?php 
require_once('../database/cnx.php');
$id=$_GET['id'];
$sql="DELETE FROM clients WHERE id_client = ?";
$result=$db->prepare($sql);
$result->bind_param('i',$id);
$rs=$result->execute();
if($rs){
    echo "
    <script> 
        alert('Suppression avec succee');
        window.location='../views/listclient.php';
    </script>
    ";
}else{
    echo"Suppression Echoue.";
}
?>