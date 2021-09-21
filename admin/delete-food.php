<?php
 
  //echo "Delete food page";
  include('../config/constants.php');

  if(isset($_GET['id']) && isset($_GET['image_name']))
  {
     //echo"Process to Delete";

     $id=$_GET['id'];
     $image_name=$_GET['image_name'];

     if($image_name !="")
     {
         $path="../images/food".$image_name;

         $remove=unlink($path);


         if($remove==false)
         {
             $_SESSION['upload']="<div class='error'>Failed to Remove Image File.</div> ";

             header("location:manage-food.php");

             die();
         }



         





     }

      $sql="DELETE FROM tbl_food WHERE id=$id";

      $res=mysqli_query($conn, $sql);

      if($res==true)
      {
             $_SESSION['delete']="<div class='succsess'>Food Deleted Successfully.</div>";
             header("location:manage-food.php");

      }
      else
      {
        $_SESSION['delete']="<div class='succsess'>Faild to Delet Food.</div>";
       header("location:manage-food.php");

      }


  }
  else
  {
    // echo "redirect";

    $_SESSION['unauthorize']="<div class='error'>unauthrized</div>";
    header("location:manage-food.php");


  }




  ?>