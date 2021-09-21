<?php 
session_start();
require_once 'database.php';
if(isset($_POST['submit'])){
	  
	$fn = $_POST['fullname'];
    $pnum= $_POST['contact'];
	$order = $_POST['Order'];
	$quantity = $_POST['Quantity'];
	$email = $_POST['email'];
	 $address = $_POST['address'];
	
	
		
	
$conn = new mysqli('localhost','root','','food-order');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}     
	$sql="INSERT INTO `orders` (`fullname`, `pno`, `orderName`, `quantity`, `email`, `address`) VALUES ('$fn', '$pnum', '$order', '$quantity', '$email','$address')";

	
	 
	if ($conn->query($sql) === TRUE) {

     
	 echo '<script>alert(" Your Order Succesfuly !...")</script>'; 
	 
	
  
     
  
			 
  
}else{
	
	echo '<script>alert("Please Try Again !...")</script>'; 
	
}

$conn->close();

}



?>