<?php 

$servername = "localhost";
$username ="root";
$password ="";
$dbname="demo";

$con=new mysqli($servername,$username,$password,$dbname);
if($con==TRUE){
echo "DB connected";
}

$em=$_REQUEST['email'];
$pw=$_REQUEST['password'];

$sql="SELECT email,password from login where email='$em' and  password='$pw';";
$c=mysqli_query($con,$sql);
if(mysqli_num_rows($c)>0){
	

	header("location:main.html");
	
}
else{
	echo'<script>alert("Invalid email or Password")</script>';
	sleep(5);
	header("location:index.html");
	
}

?>
