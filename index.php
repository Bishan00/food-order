<?php
require_once 'php/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>HOT FOOD</title>
    <link rel="stylesheet" href="css/Home.css">
</head>
<body>
<form action ="#" method="POST">
    <section id="header" style=" background-color:#7d9c32;">
        <nav>
            <a href="index.php"><img src="pic/Mayurga__1_-removebg-preview.png"></a>
            <div id="nav-links">
                <ul>
                    
                 <li><a href="index.php">HOME</a></li>
                 <li><a href="index.html">ABOUT</a></li>
                 
                 <li><a href="">CONTACT</a></li>
				 <li><a href="login.php">SIGN UP/SIGN IN</a></li>
                </ul>
 
            </div>
        </nav>
      


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            
            <div class="carousel-inner" role="listbox">
             
                <div class="item active">
                    <div class="banner" style="background-image: url(pic/brooke-lark-jUPOXXRNdcA-unsplash.jpg);"></div>
                    <div class="carousel-caption">
                       
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">Welcome to<br> <span>HOT FOOD</span> Resturent</h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s"></h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a style="background-color:#b2e043; color:black;" href="#">Contact us</a></p>
                       
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(pic/haryo-setyadi-yvzzemH8-J0-unsplash.jpg);"></div>
                    <div class="carousel-caption">
                        
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">We Are <span>Franco</span></h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s">Hot And Fast</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a style="background-color:#b2e043; color:black;" href="#">Contact us</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(pic/brenan-greene-HPZs4EXRFSU-unsplash.jpg);"></div>
                    <div class="carousel-caption">
                       
                        <h2 class="animated zoomIn" style="animation-delay: 1s">We are <span>MAYURA RESTURENT </span></h2>
                        <h3 class="animated fadeInLeft" style="animation-delay: 2s">The forerunner of fresh caterers</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a style="background-color:#b2e043; color:black;" href="#">Contact us</a></p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Explore Foods -->
        <section id="Food">
            <h1>Explore Foods</h1>
            <p>One more amazing benefit which is connected to hot and spicy foods is the fact that it can develop your mood.</p>
     
            <div id="row">
                <div id="Food-col">
                     
                    <img src="pic/burger.jpg">
                    <div id="layer">
                        <h3>BURGER</h3>
     
                    </div>
                </div>
                <div id="Food-col">
                 <img src="pic/pizza.jpg">
                 <div id="layer">
                     <h3>PIZZA</h3>
     
                 </div>
             </div>
             <div id="Food-col">
                 <img src="pic/momo.jpg">
                 <div id="layer">
                     <h3>MOMO</h3>
     
                 </div>
             </div>
            </div>

             <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

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
						?>
						<img src="images/food<?php echo $image_name?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
						
						<?php
						
					}
				 
				 ?>
                    
                  </div>

                   <div class="food-menu-desc">
                    <h4><?php echo $title; ?></h4>
                    <p class="food-price"><?php echo $price; ?></p>
                    <p class="food-detail">
                       <?php echo $description; ?>
                    </p>
                    <br>

                    <a href="" onclick="m()" class="btn btn-primary">Order Now</a>
                  </div>
                 </div>
			
		       <?php
				   }
				   
			   }else{
				   
				   echo"<div class='error'>FOOD NOT FOUND</div>";
				   
			   }
			
			
			?>

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>

     

   
    

    

        </section>

    </section>
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




   
   
    <script type="text/javascript">
	
	                   
						function m(){
							alert("Please Sign In !....");	 			      
						               
						}
	</script>

  

  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
    </form>
</body>
</html>