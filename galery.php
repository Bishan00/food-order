<?php
require_once 'php/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website design tutorial </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/Hotel.css">

</head>
<body>
    <!-- nav bar -->
    <section id="header">
        <nav>
            <a href="#"><img src="pic/Mayurga__1_-removebg-preview.png"></a>
            <div id="nav-links">
                <ul>
                    
                 <li><a href="login-index.php">HOME</a></li>
                 
                 <li><a href="">CONTACT</a></li>
                </ul>
 
            </div>
        </nav>
      


<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    

          <?php
			   
			   
			   
			   $sql = "select * from tbl_food ";
			   
			   $res = mysqli_query($conn,$sql);
			   
			   $count = mysqli_num_rows($res);
			   
			   if($count>0)
			   {
				   while($row=mysqli_fetch_assoc($res))
				   {
					   $id = $row['id'];
					   $title = $row['title'];
					   $price = $row['price'];
					   $description = $row['description'];
					   $image_name = $row['image_name'];
		     ?>
					   
					    <div class="food-menu-box">
                <div class="food-menu-img">
				
				 <?php
				 
				    if($image_name=="")
					{
						 echo"<div class='error'>IMAGE NOT FOUND</div>";
						
					}else{
						
						
					}
				 
				 ?>
             <div class="box-container">       
               <div class="box" style="background-color:#bdb07d;">
			      <img src="images/food<?php echo $image_name?>" style="width:400px;" >
                  
                <div class="content">
                  <h3><?php echo $title;?></h3>
                  <p><?php  echo $description; ?></p>
                  <a href="order.php" class="btn">ordern now</a>
               </div>
              </div>
			</div>
		       <?php
				   }
				   
			   }else{
				   
				   echo"<div class='error'>FOOD NOT FOUND</div>";
				   
			   }
			
			
			?>
		
		
		
		
		
		

   

   

</section>

<!-- gallery section ends -->

       <!-- FOTTER -->
       <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="index.html">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>contact us</h4>
                    <ul>
                        
                        <li><a>0761285178</a></li>
                        <li><a>Nibm matara</a></li>
                        <li><a>Chalitha@gmail.com</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">Burger</a></li>
                        <li><a href="#">Pizza</a></li>
                        <li><a href="#">CupCake</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer> 




















<!-- custom js file link  -->
<script src="js/src.js"></script>


</body>
</html>