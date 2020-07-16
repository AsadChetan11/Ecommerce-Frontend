<?php 

include('function.php');


$mysqli = mysqli_connect('localhost', 'root','','dailyshop') or die(mysqli_error($mysqli));


if(isset($_POST['register'])){

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$city = $_POST['city'];

$sql = "INSERT INTO register (firstname, lastname, email , password , country , city) VALUES ('$fname', '$lname','$email','$password','$country','$city')";


$result=mysqli_query($mysqli,$sql); 

    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type']= "success";

    header("location: index.php");


}


?>