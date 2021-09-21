<?php

  include('../config/constants.php');
   
  $id = $_GET['id'];

  $sql="DELETE FROM bl_admin WHERE id=$id";

  $res= mysqli_query($conn, $sql);


  if($res==true)
  {

     $_SESSION['delete'] ="<div class='success'>Admin deleted successfully.</div>";

    
	 header("Location:manage-admin.php");
  }
  else
  {
      //echo "Failed to delete Admin";
      $_SESSION['delete']="<div class='error'>Fail to Delte Admin. try again later.</div>";
     
	  header("Location:manage-admin.php");
  }







?>