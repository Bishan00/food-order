<?php 
session_start();
require_once 'database.php';
if(isset($_POST['register'])){
	  
	$fn = $_POST['fname'];
    $ln = $_POST['lname'];
	$email = $_POST['email'];
	$pnum= $_POST['pno'];
	$date = $_POST['dob'];
    $password = $_POST['pass'];
	$repassword = $_POST['re-pass'];
	$gender = $_POST['g'];
	
		
	
$conn = new mysqli('localhost','root','','food-order');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}     
	$sql="INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `repassword`, `PNO`, `dob`,`gender`) VALUES ('$fn', '$ln', '$email', '$password', '$repassword', '$pnum', '$date','$gender')";

	
	 
	if ($conn->query($sql) === TRUE) {

     $_SESSION["ID"] = $_POST['pno'];
	 echo '<script>alert(" Succesfuly Registation !...")</script>'; 
	 header("Location:login.php");
	
  
     
  
			 
  
}else{
	
	echo '<script>alert("Not Succesfuly Registation !...")</script>'; 
	header("Location:register.php");
}

$conn->close();

}



?>