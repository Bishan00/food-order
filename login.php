<?php

require_once 'php/login-a.php'; 
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script/jquery-3.6.0.min.js"></script>
<script src="script/sweetalert2.min.js"></script>
<link rel="stylesheet" href="script/sweetalert2.min.css">
<style type="text/css">
* {  margin:0; padding:0;}
    body{
	background-color:#17738f;
	
}
   .body{
      background-image:url(upload/login.png);
	  background-size: 1200px 580px;
	  width:1200px;
	  height:580px;
	  margin:20px auto;
	  box-shadow:4px 4px 40px #0b1d4d;
	  box-sizing:border-box;
	  border-radius: 10px 10px 10px 10px;
   }
   .log{
     padding:0px 100px ;
	
   }
   #h1{
    color:#f7f8fa;
    font-size:70px;
    font-family:Fantasy;	
	margin-left:70px;
	letter-spacing: 2px;
	word-spacing:5px;
	font-weight:bold;
   }
   
   .log input{
   
   width:30%; margin-bottom: 30px;
   
   } 
    .log input[type=text], .log input[type=password]{
	     border:none;
	     border-bottom: 1px solid #f7f8fa;
	     background: transparent;
	     outline:none; 
		 height:20px;
		 font-size: 16px;
	     width:270px;
		
}

.log label{
    font-size:20px;
	font-family:arial;

    color:#f7f8fa;
} 

.log input[type=submit]{ 
     border:none;
     outline:none; 
     height:35px;
     background: #f7f8fa;
     color: back;
     font-size: 16px; 
     font-weight:bold;
     border-radius: 20px 20px 20px 20px;
     margin:15px 5px;
	 width:130px;
	 }
	 .log a:hover{
	  color:red;
    }
	
	 .fa-customize{
	   font-size:35px;
	   color:white;
	   padding:15px 15px;
	 }
	 #back:hover{
	   color:black;
     }
.a{
	display:none;
	padding: 10px;
	width:370px;
	
}
.log a{
	
	color:#f7f8fa;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}	 
	 

	 

</style>
</head>

<body>
<form action="#" method="POST">
    
  <div class="body" id="body">
      <a href="index.php" id="back"><i class="fa fa-arrow-circle-left fa-customize" aria-hidden="true"></i></a>
  <div class="log">
       <h1 id="h1"> Sign In</h1><br>
	  
	   <div class="a" id="a">
        <strong id="span"></strong>
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        </div><br>
	   
	   
	   <label id="pnol">Phone Number</label><br><br>
        <input type="text" id="pno" name="pno" onclick="big(this)" ><br>
 
        <label id="passwordl" >Password</label><br><br>
        <input type="password" id="password" name="password" onclick="big2(this)" ><br>

        <a href="">Forgot Password</a><br><br>

        <input type="submit" name="login" id="login" onmouseover="bigbutton(this)" onmouseout="normalbutton(this)" value="Sing In"/>
      <input type="submit" onclick="register(this)" name="register" value="Sing Up" onmouseover="bigbutton(this)" onmouseout="normalbutton(this)"/>
		</div>
	  
  </div>
   <script type="text/javascript">
                var myvar = '<?php echo $_SESSION["ID"];?>';          
		        var myvar2='<?php echo $_SESSION["password"];?>';  
               
				
				
				$('#login').on('click', function(){  
				
				    document.getElementById("passwordl").style.fontSize = "20px";
					document.getElementById("password").style.width = "270px";
					
					document.getElementById("password").style.background = "#d1f0eb";
					document.getElementById("password").style.border = "solid 1px  black";
					
                   var username = document.getElementById("pno").value;
                   var password = document.getElementById("password").value;	
                   var spn = "Successfully Your  Login  !......";				   
                   var spn2 = " incorrect phone-number or password !.";
					  if(myvar==username && myvar2==password){
						 
  						   document.getElementById("span").innerHTML = spn;
						   document.getElementById('a').style.display = 'block';
                           document.getElementById('a').style.background = '#04AA6D';
					       alert("WelCome..");
						   window.location='profile.php';
				        }
				    	else
                        {
							
						   document.getElementById("span").innerHTML = spn2;
						   document.getElementById('a').style.display = 'block';
                           document.getElementById('a').style.background = '#f44336';
                           alert("Try Again..");						   
						  

						}							
                 
			      });
				 
				  function big(x) {
                   x.style.width = "300px";
				   x.style.background =" #d1f0eb";
				   x.style.height="30px";
				   x.style.border = "solid 0px ";
				   document.getElementById("pnol").style.fontSize = "25px";
				   
                        }
				 
                  function big2(x) {
				   document.getElementById("pnol").style.fontSize = "20px"; 
                   document.getElementById("pno").style.width = "270px";
                   	
                   document.getElementById("pno").style.border = "solid 1px ";				   
                   x.style.width = "300px";
				   x.style.background ="#d1f0eb";
				   x.style.height="30px";
				   x.style.border = "solid 0px ";
				   document.getElementById("passwordl").style.fontSize = "25px";
                        }
						
				  function bigbutton(x){
                    x.style.background="#44ebe8";
					x.style.width="135px";
					x.style.height="40px";
					
					    }	
                  function normalbutton(x){
					x.style.width="130px";
					x.style.height="35px";  
					x.style.background="#f7f8fa";
				        }


					
				  					
  </script>;
 
</form>
</body>

</html>