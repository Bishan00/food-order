<?php

require_once 'php/profile-a.php'; 

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
	margin:px ;
}
#about{
	
	padding:20px 20px;
	font-size:36px;
	color:#d9e3a6;
}
table, th, td {
 
  padding: 20px ;
}
table {
  border-spacing: 10px;
 
  padding:10px 100px;

}
table tr td{
	color:#e7edc7;
	text-align:center; 
	font-size:20px;
}
table th{
	color:#d9e3a6;
	 font-size:20px;
	 text-align:25px;
	 padding:10px 80px;
	 
}

#submit{ 
     border:none;
     outline:none; 
     height:35px;
     background:#c0cc81;
     color: black;
     font-size: 20px; 
     font-weight:bold;
     border-radius: 20px 20px 20px 20px;
     margin:20px  300px;
	 width:300px;
	 
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
		 
		  
		    
	                   <div class="main">
	                         <h1 id="about">About</h1>
	                            <table  >
                                        <tr>
                                         <th>First name</th>
                                         <th>Last name</th> 
                                         <th>Gender</th>
                                        </tr>
                                        <tr>
                                        <td><input type="text" name="fn" value="<?php echo $fname;?>"/><hr id="h"></td>
                                        <td><input type="text" name="ln" value="<?php echo $lname;?>"/><hr></td>
                                        <td><input type="text" name="gend" value="<?php echo $gender;?>"/><hr></td>
                                        </tr>
										
		              		    </table><br>
                                <table >
                                        <tr>
                                         <th><h5>Phone Num</h5> </th>
                                         <th> Email AD </th> 
                                         <th >BirthDay</th>
                                        </tr>
                                        <tr>
                                        <td><input type="text" name="phone" value="<?php echo $pno;?>"/><hr></td>
                                        <td><input type="text" name="em" value="<?php echo $email;?>"/><hr></td>
                                        <td><input type="text" name="Dob" value="<?php echo $dob;?>"/><hr></td>
                                        </tr>
										
		              		    </table>		
                                
                                <input id="submit" name="submit" type="submit" value="Update"/>								
					    </div>
               		
			
		  
	  </div>
	   	
</form>
</body>
</html>