<?php
    session_start();
	require_once 'database.php';
    $message="";
	extract($_POST);
	if(isset($_POST['register'])){
		header("Location:register.php");
	}
	if(isset($_POST['login'])) {
    
    
    if(count($_POST)>0) {
       
        $result = mysqli_query($conn,"SELECT * FROM user WHERE PNO='" . $_POST["pno"] . "'  and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["ID"] = $_POST['pno'];
		
        $_SESSION["password"] = $_POST['password'];
		$_SESSION["fname"] = $row['fname'];
		$_SESSION["lname"] = $row['lname'];
		$_SESSION["dob"] = $row['dob'];
		$_SESSION["email"] = $row['email'];
		$_SESSION["gender"] = $row['gender'];
		
		$sql2 = "SELECT `UPNO`,`image` FROM `profile-pic` WHERE UPNO ='" . $_POST["pno"] . "' ";
					                   $result1 = $conn->query($sql2);		   
			                if ($result1->num_rows > 0) {
                                          // output data of each row
                            while($row = $result1->fetch_assoc()) {
                                            $_SESSION["img2"] = '<img class="pic" src="data:image;base64,'.$row['image'].'" >';
											$pic = $_SESSION["img2"];
						                    
							 }	
							}					
		            
							  
							              
	    
		echo '<style type="text/css"> #password{  border-bottom: 2px solid green;}   </style>';
		header("Location:login-index.php");
		 
		
		
		}else{
			
	        echo '<script>alert("Not Succesfuly Login !...")</script>';      
             
			
		}
		
		
	
        } else {
			
			
		
		}
		
		
	}
		
    
    
?>