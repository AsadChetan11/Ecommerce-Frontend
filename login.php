<?php
 


 
$mysqli = mysqli_connect('localhost', 'root','','dailyshop') or die(mysqli_error($mysqli));

if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql  = "SELECT * from users where `username`='$username' and `password`='$password'";


    $result=mysqli_query($mysqli,$sql); 
 
   
    if (mysqli_num_rows($result)) {
        header('Location: index.php');

    } 

    else {
      echo "Not Login";  

    }
}
 
?>