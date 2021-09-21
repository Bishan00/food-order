<?php

require_once 'php/profile-a.php'; 


	
if(isset($_POST['pass'])){
	      
		   $ID = $_SESSION["ID"];
		   $cpass = $_POST['cpass'];
           $rpass = $_POST['rpass'];
	   	   $npass = $_POST['npass'];
		  
		$result = mysqli_query($conn,"SELECT * FROM user WHERE PNO='$ID' ");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["Pnumber"] = $row['PNO'];
		$_SESSION["Password"] = $row['password'];
		
	 if($_SESSION['Pnumber'] == $cpass){
			  
			  if($npass == $rpass){
		
		        $sql = "UPDATE user SET password = '$rpass', repassword = '$rpass'
                      WHERE PNO = '$cpass'";

         if ($conn->query($sql) === TRUE) {
			 
	          
		      $_SESSION["password"] = $_POST['rpass'];
			  
	       $ID = $_SESSION["ID"];
           $email = $_SESSION["email"];
           $dob = $_SESSION["dob"];
		   $pno = $_SESSION["ID"];
		   $lname = $_SESSION["lname"];
	       $fname = $_SESSION["fname"];
           $gender = $_SESSION["gender"];
		
         echo '<script>alert(" Password Update Succesfuly !...")</script>'; 
		
		header("Location:profile.php");
       } else {
          echo '<script>alert(" Please Try Again!...")</script>'; 
		  header("Location:changePassword.php");
       }
	}else{
		echo '<script>alert(" Passwords Are Dont Matches !...")</script>'; 
		
	}	
			   
	}else if($_SESSION['Password'] == $cpass){
		
		     if($npass == $rpass){
		
		        $sql = "UPDATE user SET password = '$rpass', repassword = '$rpass'
                      WHERE password = '$cpass'";

         if ($conn->query($sql) === TRUE) {
			 
	          
		      $_SESSION["password"] = $_POST['rpass'];
			  
	       $ID = $_SESSION["ID"];
           $email = $_SESSION["email"];
           $dob = $_SESSION["dob"];
		   $pno = $_SESSION["ID"];
		   $lname = $_SESSION["lname"];
	       $fname = $_SESSION["fname"];
           $gender = $_SESSION["gender"];
		
            echo '<script>alert(" Password Update Succesfuly !...")</script>'; 
		
		     header("Location:profile.php");
       } else {
            echo '<script>alert(" Please Try Again!...")</script>'; 
		    header("Location:changePassword.php");
       }
	     }else{
		    echo '<script>alert(" Passwords Are Dont Matches !...")</script>'; 
		
	       }
		 
		 
	}else{
		
		   echo '<script>alert(" Please Check Your currentPassword or PhoneNumber !...")</script>'; 
	}
		   
}
		
        
		
	
           
       
		
	   	
    
		 
}


	 
	
       	

	

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
* {  margin:0; padding:0;}
    body{
		 background-color:#737a4e;
		
	}
   .body{
      background-image:url(pic/updateProfie.jpg);
	  background-size: 1200px 630px;
	  width:1200px;
	  height:630px;
	  margin:0px auto;
	  box-shadow:8px 8px 50px #000;
	  box-sizing:border-box;
	  border-radius: 10px 10px 10px 10px;
   }
   nav{ 
   
	background: rgba(0,0,0,.9);
	border-radius:10px;
    height:70px;
    margin:0px auto;
	box-shadow:8px 8px 50px #000;
	width:1200px;
}
nav ul{
	list-style:none;
	margin-left:50px;
}
nav ul li{
	display:inline;
}
nav a{
	color:#E3E0B8;
	text-transform:uppercase;
	text-decoration:none;
	margin: -25px 40px 0px 30px;
	display:inline-block;
	font-weight:bold;
	font-size:20px;
	font-family:arial black;
	float:right;
}
#h1{
	padding:7px 10px;
	font-size:36px;
    letter-spacing: 5px;
	color:#E3E0B8;
}

.side{
	background: rgba(0,0,0,.9);
	margin:0px auto;
	width:300px ; 
    height:560px;	
	text-align:center;
	float:left;
	}
.profilepic{
	
	background-color:white;
	width:170px; 
	height:170px; 
	border-radius: 170px;
    border: 5px solid white;
	margin:20px auto;
	}	

.pic{
	width:170px; height:170px; border-radius:170px;
}
.data{
	
    margin:20px auto;
    }
#h2{
	font-size:28px;
	
	color:#d9e3a6;
}
.data a{
	 font-size:22px;
	 color:#d9e3a6;
	 text-decoration:none;
}
.data a:hover{
	
	font-size:24px;
	color:yellow;
}
nav a:hover{
	color:yellow;
}
.main{
	background: rgba(0,0,0,.7);
	float:right;
	width:900px;
	height:560px;
	background-color:#667321;
}
#about{
	
	padding:20px 20px;
	font-size:36px;
	color:#d9e3a6;
}
.main .box{
		position:relative;
		margin:0px 300px;
		
		
	}
.main input[name=cpass], .main input[name=npass], .main input[name=rpass]{
	     border:none;
		padding:10px 5px;
	     outline:none; 
		 margin-bottom:30px;
		 font-size: 16px;
		 color:#fff;
		 width:250px;
		 border-bottom: 1px solid #fff;
		 background:transparent;
}
.main .box label{
	
	position:absolute;
	top:0;
	left:0px;
	padding:10px 0;
	font-size:20px;
	color:#d9e3a6;
	pointer-events:none;
	transition: 0.5s;
	
}

 	.main .box input:focus ~ label,
	.main .box input:valid ~ label
	
	{
		top: -25px;
	} 

#submit{ 
     border:none;
     outline:none; 
     height:35px;
     background:#c0cc81;
     color: black;
     font-size: 15px; 
     font-weight:bold;
     border-radius: 5px 5px 5px 5px;
     margin:20px  350px;
	 width:150px;
	 
	 }
	 .a{
	display:none;
	padding: 10px;
	margin:0 250px;
	width:370px;
	
}
#forgot{
	 margin-left:300px;
	color:white;
	font-weight:bold;
	
}
#check{
	margin-left:10px;
	margin-top:3px;
	
}
@media only screen and (min-device-width : 320px) and (max-width:480px){
      
	.body{
     
	  background-color:white;
	 background-image:none;
	  background-size:400px 690px;
	  width:400px;
	  height:690px;
	  border-radius:none:
      margin:0 auto;

   }
   nav{ 
	   width:400px;
	   height:80px;
    margin:0px auto;
   }
   
   nav ul{
	list-style:none;
	margin-left:10px;
}
nav ul li{
	display:inline;
}
nav a{
	color:#E3E0B8;
	text-transform:uppercase;
	text-decoration:none;
	margin:0px 15px 5px;
	display:inline-block;
	font-weight:bold;
	font-size:12px;
	font-family:arial black;
	float:right;
}
.side{
	 background-color:#3b3e42;
	margin:0px auto;
	
	width:400px ; 
    height:180px;	
	text-align:center;
	float:left;
	}
.profilepic{
	
	background-color:white;
	width:150px; 
	height:150px; 
	border-radius: 150px;
    border: 5px solid white;
	margin:5px auto;
	}
.pic{
	width:150px; 
	height:150px; 
	border-radius: 150px;
}
.data{
	
    margin:20px auto;
    }


.data a{
	 display:none;
}

table{
	float:left;
	 padding:0px 0px ;
	 
}
table tr th{
	 font-size:16px;
	 text-align:10px;
     padding:0px 0px;
}
table td hr{
	width:80px;
}
.main{
	background-color:#666633;

	width:400px;
	height:540px;
	
}




}
</style>
</head>
<body>
<form method="POST" action="">
<div class="body">  
  <nav>
	   
	     
		 <ul>
		       <li><h1 id="h1">My Profile</h1></li>
			    
			 </ul> 
			 <a href="logout.php"><label>Logout</label></a>
			   <a href="login-index.php"><label >Home</label></a>
			   
    </nav>  <hr>
    
	         		   
    
		   <div class="side">
		     <div class="profilepic">
	           <div class="pic">  <?php echo $pic;?> <br></div>
				
	         </div>
	       <div class ="data">
	          <h2 id="h2"><?php echo $male ." "; ?><?php echo $fname." "; ?><?php echo $lname; ?></h2><br><br>
	          <a href="login-index.php" >Home</a><br><br><br>
		      <a href="profile.php" >Go Back</a><br><br><br>
		     
	       </div>
		   </div>
		 
		  
		    
	                   <div class="main" onclick ="check3()">
	                         <h1 id="about">Change Password</h1><br><br>
							 
	                            <div class="rows">
						   		 <div class="a" id="a">
                              <strong id="span"></strong>
                              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                              </div><br>
		                     <div class="box">
		                     <input type="text"  name="cpass" required="" />
		                     <label id="cpassword">current password</label> <label><br><br> 
		                    </div>
		                    <div class="box">
		                     <input type="text"  name="npass" id="npass" required=""  />
		                    <label>new password</label>
		                    </div>
							<div class="box">
		                     <input type="text"  id="rpass" name="rpass"  onclick="check1()" required=""  />
		                     <label>confirm password</label><br>
							 
		                    </div>
	                       </div>
						
						
						<button id="submit" name="pass" onclick="check()">Change Password</button><br>
						<label id="forgot">Forgot current Password?</label>
						<input  type="checkbox"  id="check" name="check[]" onclick ="check2()" value="checked"  />
               		</div>
			
		  
	  </div>
	   	<script type="text/javascript">
		
		        function check1()
				{
					var newpass = document.getElementById("rpass").value;
                   var repass = document.getElementById("npass").value;
				   var spn = "Passwords Are Matches !......";
				   var spn2 = " passwords Are Don't Matches !.";
				   var spn3 = " Please Fill Informations !.";
				    if(newpass==repass){
						
						   document.getElementById("span").innerHTML = spn;
						   document.getElementById('a').style.display = 'block';
                           document.getElementById('a').style.background = '#00ff22';
					}else
                        {
							
						   document.getElementById("span").innerHTML = spn2;
						   document.getElementById('a').style.display = 'block';
                           document.getElementById('a').style.background = '#ff0000';
                          						   
						}
					if(newpass=="" || repass==""){
						   document.getElementById("span").innerHTML = spn3;
						   document.getElementById('a').style.display = 'block';
                           document.getElementById('a').style.background = '#ff0000';
						
						
					}	

						
					
				}
			function check2(){
				document.getElementById("cpassword").innerHTML = "PhoneNumber".fontsize(5.5);
				document.getElementById('cpassword').style.color = '#f8fc03';
				
				}	
				
			function check3(){
				   var newpass = document.getElementById("rpass").value;
                   var repass = document.getElementById("npass").value;
				   var spn = "Passwords Are Matches !......";
				   var spn2 = " passwords Are Don't Matches !.";
				   var spn3 = " Please Fill Informations !.";
				  if(newpass==repass){
						
						   document.getElementById("span").innerHTML = spn;
						   document.getElementById('a').style.display = 'block';
                           document.getElementById('a').style.background = '#00ff22';
					}else
                        {
							
						   document.getElementById("span").innerHTML = spn2;
						   document.getElementById('a').style.display = 'block';
                           document.getElementById('a').style.background = '#ff0000';
                          						   
						}
					if(newpass=="" || repass==""){
						   document.getElementById("span").innerHTML = spn3;
						   document.getElementById('a').style.display = 'block';
                           document.getElementById('a').style.background = '#ff0000';
						
						
					}	
			}	
		
				
			
		</script>
</form>
</body>
</html>