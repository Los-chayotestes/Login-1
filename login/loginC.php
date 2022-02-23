<?php
$name=$_POST['name'];
$pass=$_POST['password'];
session_start();
$_SESSION['name']=$name;
require 'database.php';

$sql="SELECT * FROM users where name='".$name."' and password='".$pass."'";

$result = mysqli_query($conn, $sql);

$filas = mysqli_num_rows($result);
if ($filas>0){

  require 'welcome.php';

}else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}
  ?>



  <?php


 ?>
