<?php 
require_once('../database/cnx.php');
require_once('bootstrap.php');
$id=$_GET['id'];
echo "
    <script>
        if(confirm('Do you want to delete this ?')){
            window.location='../controller/deleteCommand.php?id=$id';
        }
        else{
            window.location='listcommand.php';}
            </script>
";
?>