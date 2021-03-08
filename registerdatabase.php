<?php


 $servername="localhost";
 $username="root";
 $password="";
 $db="test";

 $con=new mysqli($servername,$username,$password,$db);
 if($con->connect_error){
     echo "Connection failed";
 }

     $name=$_POST['name'];

     $email=$_POST['email'];

     $password=$_POST['password'];

     $stmt = $con->prepare("insert into register(name,email,password) values(?,?,?)");

     $stmt->bind_param("sss",$name,$email,$password);

 if($stmt->execute()){
     echo "Details entered";
 }
 else{
     echo "Details not entered";
 }

?>
