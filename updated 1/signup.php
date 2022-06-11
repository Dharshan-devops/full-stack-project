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
$em=$_REQUEST['email'];
$pw=$_REQUEST['password'];


$sql="CREATE TABLE login(name varchar(20),email varchar(20),password varchar(20));";
$sql="INSERT INTO login VALUES('$nm','$em','$pw');";
if(mysqli_query($con,$sql)){
	header("location:index.html");
}

?>