<?php include('partials/menu.php'); ?>
<html>
<head>
   <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <section class="food-menu" style="background-image: linear-gradient(rgba(47, 54, 43, 0.7),rgba(42, 46, 41, 0.7)),url(uploadPic/body.jpg);">
        <div class="container">
            <h2 class="text-center" style="color:#a9c77f;">Food Menu</h2>

            <?php
			   
			   
			   
			   $sql = "select * from orders ";
			   
			   $res = mysqli_query($conn,$sql);
			   
			   $count = mysqli_num_rows($res);
			   
			   if($count>0)
			   {
				   while($row=mysqli_fetch_assoc($res))
				   {
					   $name = $row['fullName'];
					   $pno = $row['pno'];
					   $order = $row['orderName'];
					   $quantity = $row['quantity'];
					   $email = $row['email'];
					   $address = $row['address'];
		     ?>
					   
	    <div class="food-menu-box" style="background-color:#32474d">
                <div class="food-menu-img">
				
				 
                    
                  </div>

                   <div class="food-menu-desc" style="background-color:;" >
				    <label class="food-price" style="color:color:#9bb577; font-weight:bold; font-size:30px;">Order-:</label> <label  style="color:#9bb577;  font-size:23px; font-weight:bold; margin-left:58px;"> <?php echo "   "; ?><?php echo $order; ?></label><br><br>
                    <label class="food-price" style="color:color:#9bb577; font-weight:bold; font-size:18px;">Customer Name-:</label > <label  style="color:#9bb577;  font-size:17px; margin-left:12px;"> <?php echo "  "; ?><?php echo $name; ?></label>
					<p class="food-price"><label style="color:color:#9bb577; font-weight:bold; font-size:18px;">Quantity-:</label> <label  style="color:#9bb577;  font-size:17px; margin-left:77px;"><?php echo "  "; ?><?php echo $quantity; ?></label></p>
                    <p class="food-price"><label style="color:color:#9bb577; font-weight:bold; font-size:18px;">Tel-:</label> <label  style="color:#9bb577;  font-size:17px; margin-left:125px;"> <?php echo "  "; ?><?php echo $pno; ?></label></p>
					<p class="food-price"><label style="color:color:#9bb577; font-weight:bold; font-size:18px;">Email-:</label> <label  style="color:#9bb577;  font-size:17px; margin-left:103px;" ><?php echo "  "; ?><?php echo $email; ?></label></p>
                    <p class="food-price">
                       <label style="color:color:#9bb577; font-weight:bold; font-size:18px;">Deivery Address-:</label> <label  style="color:#9bb577;  font-size:17px; margin-left:10px;"><?php echo "  "; ?><?php echo $address; ?></label>
                    </p>
                    <br>

                    
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

    </section>
  

<br /><br /><br />

                 




<?php include('partials/footer.php');?>
</body>
</html>