<?php
require_once("../database/cnx.php");

if (isset($_POST['valider'])) {
  $user=$_POST['user'];
  $pass=$_POST['pass'];
//   print_r($_POST);
  $sql="SELECT * FROM users WHERE user_id=? AND user_password=?";
  $result=$db->prepare($sql);
  $result->bind_param('si',$user,$pass);
  $rs=$result->execute();
  if($rs){
    // header("Location: ../views/home.php");
    echo"
    <script> alert('authentifier avec succee');
      window.location='../views/home.php';
    </script>";
    }
    else {
      // echo"error";
      echo"
      <script> alert('authentifier avec succee');
      window.location='../views/login.php';
    </script>";
    }
  }
?>