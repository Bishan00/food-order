<?php include('../config/constants.php');  ?>

<html>

<head>

   <title>Login . FOOD ORDER SYSTEM</title>
     <link rel="stylesheet" href="../css/admin.css">
	 
	 <style type="text/css">
         
        #input{
	     border:none;
	     border-bottom: 1px solid #f7f8fa;
	     background: transparent;
	     outline:none; 
		  height:20px;
		  font-size: 16px;
	     width:270px;
		 
		 
		
		}		 
	 
	 </style>

</head>
<body style=" background-image: linear-gradient(rgba(47, 54, 43, 0.7),rgba(42, 46, 41, 0.7)),url(uploadPic/body.jpg);">

<div class="login" style="margin-top:150px; ">

<h1 class="text-cente" style="text-align:center; color:white; font-size:50px; font-family:Fantasy;">Admin Login</h1>

<br><br>

<?php 
   if(isset($_SESSION['login']))
   {
      echo $_SESSION['login'];
       unset($_SESSION['login']);
    }

     if(isset($_SESSION['no-login-message']))
      {
	     echo $_SESSION['no-login-message'];
	     unset($_SESSION['no-login-message']);
      }
?>

<br><br>


<!--login form starts here-->

<form action="" method="POST" class="text-center">
<label style="color:white; font-weight:bold; margin-right:190px; padding:20px;">Username:</label><br><br>
<input style=" outline:none;  width:270px; height:30px;" type="text" name="username" placeholder="Enter Username"><br><br><br>

<label style="color:white; font-weight:bold; margin-right:190px; padding:20px;"  id="label">Password:</label><br><br>
<input style=" outline:none;  width:270px; height:30px;"  type="password" name="password" placeholder="Enter Password"><br><br>

<input style=" margin-right:170px;   height:30px; font-size: 16px; width:100px; background-color:#cfd4a3;" type="submit" name="submit" value="Login" class="">
<br><br>

<!--login form ends here-->





</body>

    </div>

</html>

<?php


          if(isset($_POST['submit']))
           {

               $username =$_POST['username'];
                $password =md5($_POST['password']);
            
                 $sql ="SELECT * FROM bl_admin WHERE username='$username' AND password='$password'";     
                 $res =mysqli_query($conn, $sql);
                 $count= mysqli_num_rows($res);
               if($count==1)
              {

              //user available and loging success
              $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
              $_SESSION['user']= $username;//to check whether the user is logged in or not and logoutwill unset it
              
              //redirect to home page/dashbord
              header('location:'.SITEURL.'admin/main.php');
              
            }
          else
              
              {
          
              
              //user available and loging success
              $_SESSION['login'] = "<div class='error text-center'>username or password did not match</div>";
              $_SESSION['user']= $username;//to check whether the user is logged in or not and logoutwill unset it
              
              //redirect to home page/dashbord
              header('location:'.SITEURL.'admin/login.php');
            

              }
              









		  }
