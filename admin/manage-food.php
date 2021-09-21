<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper"></div>
    <h1>Manage food</h1>
    <br /><br />

<a href="add-food.php" class="btn-primary">Add Food</a>

<br /><br /><br />

<?php



   if(isset($_SESSION['add']))
   {
       echo $_SESSION['add'];
       unset($_SESSION['add']);
   }
     if(isset($_SESSION['delete']))
     {
         echo $_SESSION['delete'];
         unset($_SESSION['delete']);
     }
       if(isset($_SEESION['upload']))
       {
           echo $_SESSION['upload'];
           unset($_SESSION['upload']);

       }
       if(isset($_SEESION['unauthorize']))
       {
           echo $_SESSION['unauthorize'];
           unset($_SESSION['unauthorize']);

       }



?>
<table class="tbl-full">

    <tr>
      <th>S.N</th>
      <th>Title</th> 
      <th>Price</th>
      <th>Image</th>
      <th>Featured</th>
      <th>Active</th>
      <th>Actions</th>

   </tr>
<?php 
 
 $sql="SELECT * FROM tbl_food";


 $res=mysqli_query($conn, $sql);

 $count=mysqli_num_rows($res);
 $sn=1;

 if($count>0)
 {
     while($row=mysqli_fetch_assoc($res))
     {
         $id=$row['id'];
		 $_SEESION['cid'] = $row['id'];
         $title=$row['title'];
         $price=$row['price'];
         $image_name=$row['image_name'];
         $featured=$row['featured'];
         $active=$row['active'];
         ?>
             <tr>
             <td><?php echo $sn++; ?>.</td>
              <td><?php echo $title; ?></td>
              <td><?php echo $price; ?></td>
               <td>
                   <?php 
                      if($image_name=="")
                      {
                          echo"<div class='error'>Image not Added.</div>";
                      }
                      else
                      {
                          ?>
                          <img src="../images/food<?php echo $image_name; ?>"width="100px">
                          <?php
                      }
                  ?>
               </td>
               <td><?php echo $featured;?></td>
               <td><?php echo $active;?></td>
               <td>
                <a href="update-food.php" class="btn-secondary">Update food</a>
                 <a href="delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete food </a>


         
               </td>
            </tr>
    
         

         
      
    
         <?php
     }
 }
 else
 {
     echo "<tr><td colspan='7' class='error'> Food Not Added Yet.</td></tr>";
 }


?>
  
   
   


  
 
</table>




</div>

<?php include('partials/footer.php');?>