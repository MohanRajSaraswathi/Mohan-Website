<?php
session_start();

$email = $_SESSION['email'];


$servername="localhost";
$username="root";
$password="";
$db="test";

$con=mysqli_connect($servername,$username,$password,$db);

if(!$con){
    die("connection failed" .mysqli_connect_error());
}

$sql = "SELECT * FROM register WHERE email='$email'";

$data = mysqli_query($con,$sql);
$row = mysqli_fetch_array($data);


echo "WELCOME  ".$row['name'];
?>
