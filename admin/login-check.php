<?php
//AUthorization -Access Control
//CHeck whether the user is logged in or not
if(!isset($_SESSION['user']))//if user session is not set
{
	//user is not logged in//redirect nto login page with massage
	$_SESSION['no-login-message']= "<div class='error text-center'>Please Loging To Access Admin Panel.</div>";
	//redirect to login page
	header("location:login.php");
}
