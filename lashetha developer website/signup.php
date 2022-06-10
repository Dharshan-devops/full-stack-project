<?php

$servername = "localhost";
$username ="root";
$password ="";
$dbname="demo";

$con=new mysqli($servername,$username,$password,$dbname);
if($con==TRUE){
echo "DB connected";
}

$nm=$_REQUEST['name'];
$pw=$_REQUEST['password'];

echo $nm;

$sql="CREATE TABLE login(name varchar(20),password varchar(20));";
$sql="INSERT INTO login VALUES('$nm','$pw');";
if(mysqli_query($con,$sql)){
	header("location:login.html");
}

?>