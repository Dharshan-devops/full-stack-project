<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname="demo";

$con=new mysqli($servername,$username,$password,$dbname);
if($con==TRUE){
echo "Db connected";
} 

$a=$_REQUEST["name"];
$b=$_REQUEST["email"];
$c=$_REQUEST["subject"];
$d=$_REQUEST["message"];

echo $a;
$sql="CREATE TABLE user(name varchar(20),email varchar(50),subject varchar(20),message varchar(150));";
$sql="INSERT INTO user VALUES('$a','$b','$c','$d');";
if(mysqli_query($con,$sql)==TRUE){
	echo "Values inserted";
	
}


?>

