<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname="demo";

$con=new mysqli($servername,$username,$password,$dbname);
if($con==TRUE){
echo "Db connected";
} 

$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$subject=$_REQUEST["subject"];
$message=$_REQUEST["message"];

echo Sname;

?>

