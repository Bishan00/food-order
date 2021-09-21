<?php
session_start();
include_once 'database.php';
        $ID = $_SESSION["ID"];
        $email = $_SESSION["email"];
        $dob = $_SESSION["dob"];
		$pno = $_SESSION["ID"];
		$lname = $_SESSION["lname"];
		$fname = $_SESSION["fname"];
        $gender = $_SESSION["gender"];
		
		if($gender=="Male" || $gender=="male")
		{
			$male = "Mr.";
			$pic = '<img  style="width:170px; height:170px; border-radius:170px;" src="pic/Male.jpg" >';
						
						
			
		}else if($gender=="Female" || $gender=="female"){
			
			$male ="Mrs.";
			$pic = '<img  style="width:170px; height:170px; border-radius:170px;" src="pic/female.jpg" >';
		}else{
			$male ="";
			$pic = '<img  style="width:170px; height:170px; border-radius:170px;" src="pic/nogender.jpg" >';
			
		}
		
    $sql = "SELECT * FROM `user` WHERE PNO ='$ID' ";
	 $result = $conn->query($sql);
	 if ($result->num_rows > 0) {
	 }
	 
	 if(isset($_POST['submit'])){
		 
		 
		$ID = $_SESSION["ID"];
        $email = $_POST['em'];
        $dob = $_POST['Dob'];
		$pno = $_POST['phone'];
		$lname = $_POST['ln'];
		$fname = $_POST['fn'];
        $gender = $_POST['gend'];
		
		 $sql = "UPDATE user SET fname = '$fname',lname = '$lname', email = '$email', PNO='$pno',dob='$dob',
                      gender = '$gender'
                      WHERE PNO = '$ID'";

         if ($conn->query($sql) === TRUE) {
			 
	          $_SESSION["ID"] = $_POST['phone'];
             
		      $_SESSION["fname"] = $_POST['fn'];
		      $_SESSION["lname"] = $_POST['ln'];
		      $_SESSION["dob"] = $_POST['Dob'];
		      $_SESSION["email"] = $_POST['em'];
		      $_SESSION["gender"] = $_POST['gend'];
			  
	    $ID = $_SESSION["ID"];
        $email = $_SESSION["email"];
        $dob = $_SESSION["dob"];
		$pno = $_SESSION["ID"];
		$lname = $_SESSION["lname"];
		$fname = $_SESSION["fname"];
        $gender = $_SESSION["gender"];
		
         echo "Record updated successfully";
		 header("Location:profile.php");
       } else {
          echo "Error updating record: " . $conn->error;
       }


		 
	 }
	 
	 
     
	 
?>
