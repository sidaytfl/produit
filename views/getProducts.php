<?php 
    $sql="SELECT * FROM produits ";
    $result=mysqli_query($db,$sql);
    while($row=mysqli_fetch_row($result)){
        $nom=$row[1];
        echo "<option value='$nom'>$nom</option>";
    }
?>