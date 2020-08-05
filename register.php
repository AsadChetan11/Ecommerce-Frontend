<?php 
require_once('function.php');
$mysqli = mysqli_connect('localhost', 'root','','dailyshop') or die(mysqli_error($mysqli));


if(isset($_POST['register'])){
    unset($_POST['register']);
  
     $sql_query = save($mysqli,'users',$_POST);
     mysqli_query($mysqli,$sql_query); 
     header("Location:account.php");
  }
  


?>