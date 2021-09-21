<?php
require_once 'php/register-a.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script/jquery-3.6.0.min.js"></script>
<script src="script/sweetalert2.min.js"></script>
<link rel="stylesheet" href="script/sweetalert2.min.css">
  <style type="text/css">
    body{
		margin:0;
		padding:0;
		font-family: sens-serif;
		background: url(upload/login.jpg);
		background-size:cover;
		
	}
	h1{
		color:#45f3ff;
		font-size:50px;
		padding:0px 40px 10px;
		
	}
    .reg{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		width:900px;
	    height:580px;
		background: rgba(0,0,0,.7);
		padding:10px 60px;
		items-align:center;
		border-radius:10px 10px;
	}
	
	.reg .box{
		position:relative;
		margin:0 10px;
		
	}
.reg input[type=text], .reg input[type=password], .reg input[type=email], .reg input[type=number]{
	     border:none;
		padding:10px 5px;
	     outline:none; 
		 margin-bottom:30px;
		 font-size: 16px;
		 color:#fff;
		 width:300px;
		 border-bottom: 1px solid #fff;
		 background:transparent;
}
.reg .box label{
	
	position:absolute;
	top:0;
	left:60px;
	padding:10px 0;
	font-size:16px;
	color:#45f3ff;
	pointer-events:none;
	transition: 0.5s;
	
}
 	.reg .box input:focus ~ label,
	.reg .box input:valid ~ label
	
	{
		top: -23px;
	} 
	
.reg form .rows{
	display: flex;
	flex-wrap: wrap;
	
} 
form .rows .box{
	padding:0 60px;
	
}
.reg form .rows2{
	padding:0 70px;
	color:#45f3ff;
} 
.rows2 #submit{
	 border:none;
     outline:none; 
     height:30px;
     background: #45f3ff;
     color: black;
     font-size: 15px; 
     font-weight:bold;
     border-radius: 10px 10px;
 
	 width:130px;

	
}
.rows2 a{
	color:#fff;
	text-decoretion:none;
	font-size:18px;
	margin:0 10px;
}
 	 
  </style>
</head>

<body>

 
     
     <div class="reg" >
       <h1 id="h1"> Sign Up New Account</h1><br>
	   
<form action="#" method="POST">
	<div class="rows">
	    <div class="box">
        <input type="text"  name="fname"onmouseover="biginput(this)" onmouseout="normalinput(this)" required="">
		<label>First Name</label>
		</div>
		
		 <div class="box">
        <input type="text"  name="lname" onmouseover="biginput(this)" onmouseout="normalinput(this)" required="">
		<label>Last Name</label>
		</div>
	</div>
    <div class="rows">
		 <div class="box">
		<input type="text"  name="email" onmouseover="biginput(this)" onmouseout="normalinput(this)" required=""/>
		<label>Email</label>
		</div>
		 <div class="box">
		 <input type="number"  name="pno" onmouseover="biginput(this)" onmouseout="normalinput(this)" required="">
		 <label>Phone Number</label>
		 </div>
	</div>
    <div class="rows">	
		  <div class="box">
        <input type="password"   name="pass" onmouseover="biginput(this)" onmouseout="normalinput(this)" required="">
		<label>Password</label>
		</div>
		 <div class="box">
        <input type="password"  name="re-pass" onmouseover="biginput(this)" onmouseout="normalinput(this)" required="">
		<label>Re-Password</label>
		</div>
		
    </div>     
    <div class="rows">	
		  <div class="box">
		  <input type="number" id="age name="age" onmouseover="biginput(this)" onmouseout="normalinput(this)"required="">
		  <label  > Age:</label>
		  </div>
		 </div> 
   <div class="rows2">	
		  <label id="genderl"> Gender:</label>
          <input type="radio" id="html" name="g" value="Male" onmouseover="bigradio(this)" onmouseout="normalradio(this)">
          <label >Male</label>
          <input type="radio" id="css" name="g" value="female"onmouseover="bigradio(this)" onmouseout="normalradio(this)">
          <label >Female</label><br><br><br>
     
        <input type="submit" id="submit" name="register" onmouseover="bigbutton(this)" onmouseout="normalbutton(this)" value="Sign Up"/><br><br>
	     Already have an account? <a href="login.php">Sign in</a>
		</div>
	  

  </form>
</div>
</body>

</html>