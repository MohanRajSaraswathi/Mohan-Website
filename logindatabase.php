<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$db="test";

$con=new mysqli($servername,$username,$password,$db);
if($con->connect_error){
    echo "Connection failed";
}
$email=$_POST['email'];
$password=$_POST['password'];

	$sql1= "SELECT * FROM register where email='$email' AND password='$password' ";

	$sql = mysqli_query($con,$sql1);
	$check = mysqli_num_rows($sql);

	if(!$check == 1){
		echo "fail";
	}
	else{

		 $_SESSION['email'] = $email;
    

$sql2 = "SELECT id FROM register where email='$email'";
$sql= mysqli_query($con,$sql2);
$result = mysqli_fetch_array($sql);

 $_SESSION['userid'] = $result['id'];

	header('location:welcome.php');

    }


?>
