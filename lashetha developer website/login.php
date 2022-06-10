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

$sql="SELECT name,password from login where name='$nm' and  password='$pw';";
$c=mysqli_query($con,$sql);
if(mysqli_num_rows($c)>0){

	header("location:index.html");
	
}
else{
	echo "INVALID USER or PASS";
	
}

?>
