<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Categorie</title>
    <style>
            .message{
                display: none;
                padding: 20px;
                margin: 20px;
                text-align: center;
                border-radius: 5px;
            }
            .success{
                background-color: #4CAF50;
                color: white;
            }
            .error{
                background-color: #f44336;
                color: white;
            }
    </style>
    </head>
<body>
    <div id="success-message" class="message success">Mise a jour success!</div>
    <div id="error-message" class="message error">Echoueeeeee.</div>
    <script>document.addEventListener('DOMContentLoaded',function(){
        const urlParams=new URLSearchParams(window.location.search);
        const status=urlParams.get('status');
        if (status === 'success') {
            document.getElementById('success-message').style.display='block';
        }else if(status === 'error'){
                document.getElementById('error-message').style.display='block';
        }
        setTimeout(function(){
            window.location.href='../views/editcategorie.php?id=<?=$id?>'
        },3000);
    });
    </script>
</body>
</html>
<?php 
require_once('../database/cnx.php');
$id=$_GET['id'];
$sql="DELETE  FROM categorie WHERE idC= ?";
$result=$db->prepare($sql);
$result->bind_param('i',$id);
$result->execute();
if ($result->execute()) {

    echo"<script>
    alert('Suppression avec succee !');
    window.location='../views/listcategorie.php';
</script>";
// echo '<body onLoad="alert(\'Suppression avec succee\')">';
// echo "<meta http-equiv='refrech' content='0;URL=../views/listcategorie.php'>";
}
?>