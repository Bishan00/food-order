<?php

require_once 'php/order-a.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/orderstyle.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="pic/Mayurga__1_-removebg-preview.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="login-index.php">Home</a>
                    </li>
                    
                    
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
            
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="fullname" placeholder="E.g. Chalitha Basula" class="input-responsive" id="fn" required >

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" id="mb" required  >

                    <div class="order-label">Order Name</div>
                    <input type="text" name="Order" placeholder="E.g. Burger" class="input-responsive" id="on" required >

                    <div class="order-label">Quantity</div>
                    <input type="text" name="Quantity" placeholder="E.g. 5" class="input-responsive" id="qun"required  >

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. Scbasula@gmail.com" class="input-responsive"id="mail" required >

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. No 321, Beach Road, Mathara" class="input-responsive" id="add" required ></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary" onlick="validate()">
                </fieldset>

            </form>

        </div>
    </section>
     <script>
        function validate ()
        {
            var a= document.getElementById("fn").value;
            var b= document.getElementById("mb").value;
            var c= document.getElementById("ea").value;
            var c= document.getElementById("ea").value;
            var d= document.getElementById("qun").value;
            var e= document.getElementById("mail").value;
            var f= document.getElementById("add").value;
           
           



            if(a=="")
            {
                alert("Please fill the name");
                return false;
            }
            if(b=="")
            {
                alert("Please fill the mobile number");
                return false;  
            }
            if(isNaN(b))
            {
                alert("Please enter only the numbers when the mobile number is entered");
            }
           if(b.length<10)
            {
                alert("Invalid Mobile Number");
                return false;
            }
            if(c =="")
            {
                alert("Please enter order name");
            }
            if(d =="")
            {
                alert("Please enter Quantity");
            }
            if(isNaN(d))
            {
                alert("Please enter only the numbers when the quantity is entered");
            }
            if(e =="")
            {
                alert("Please enter Email");
            }
            if(f =="")
            {
                alert("Please enter Address");
            }
           
          


          

            
        }
    </script>



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



