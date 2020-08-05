<?php
require_once('function.php');

//$mysqli = mysqli_connect('localhost', 'root','','dailyshop') or die(mysqli_error($mysqli));


if(count($_POST)>0) {
  
  $con = mysqli_connect('localhost','root','','dailyshop') or die('Unable To connect');
 
  $result = mysqli_query($con,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
 
  $row  = mysqli_fetch_array($result);
 
  if(is_array($row)) 
  
  {
 $_SESSION["user_id"] = $row['user_id'];
 $_SESSION["username"] = $row['username'];
 } 
 
 else {
    $message = "Invalid Username or Password!";
 }
 }




 if(isset($_SESSION["user_id"])) {
 header("Location:index.php");
 ob_clean();
 }



 
 
?>


