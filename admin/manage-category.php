<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper"></div>
    <h1>Manage category</h1>

    <br /><br /><br />
    
        <?php

             if(isset($_SESSION['add']))
             {
                  echo $_SESSION['add'];
                  unset($_SESSION['add']);
             }

             if(isset($_SESSION['remove']))
             {
                   echo $_SESSION['remove'];
                   unset($_SESSION['remove']);
             }
             if(isset($_SESSION['delete']))
             {
                  echo $_SESSION['delete'];
                  unset($_SESSION['delete']);
             }

             if(isset($_SESSION['no-category-found']))
             {
                   echo $_SESSION['no-category-found'];
                   unset($_SESSION['no-category-found']);
             }

             if(isset($_SESSION['update']))
             {
                   echo $_SESSION['update'];
                   unset($_SESSION['update']);
             }
                 
             if(isset($_SESSION['upload']))
             {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
             }
             if(isset($_SESSION['failed-remove']))
             {
                echo $_SESSION['failed-remove'];
                unset($_SESSION['failed-remove']);
             }
        ?>
        <br><br>

<a href="add-category.php" class="btn-primary">Add category</a>

<br /><br /><br />

<table class="tbl-full">
 <tr>
      <th>S.N.</th>
      <th>title</th> 
      <th>Image</th>
      <th>Featured</th>
      <th>Active</th>
      <th>Action</th>

   </tr>

   <?php
      $sql = "SELECT * FROM tbl_category";

      $res = mysqli_query($conn, $sql);

      $count = mysqli_num_rows($res);

      $sn=1;
	  
      
      if($count>0)
      {
          while($row=mysqli_fetch_assoc($res))
          {
               $id = $row['id'];
               $title = $row['title'];
               $image_name = $row['image_name'];
               $featured = $row['featured'];
               $active = $row['active'];
			   $_SESSION['cid'] = $row['id'];

               ?>

                 <tr>
                         <td><?php echo $sn++; ?></td>
                          <td><?php echo $title; ?></td>

                          <td>
                          <td>
                   <?php 
                      if($image_name=="")
                      {
                          echo"<div class='error'>Image not Added.</div>";
                      }
                      else
                      {
                          ?>
                          <img src="../images/category<?php echo $image_name; ?>"width="100px">
                          <?php
                      }
                  ?>
               </td>
                          <td><?php echo $featured; ?></td>
                          <td><?php echo $active; ?> </td>
                     <td>
                           <a href="update-category.php?id=<?php echo $id = $_SESSION['cid']; ?>" class="btn-secondary">Update Category</a>
                           <a href="delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delate Category</a>
                       </td>
                   </tr>
               <?php
          }
      }
      else
      {
          ?> 
               <tr>
                    <td colspan="6"><div class="error">No Category Added.</div></td>
               </tr>
          <?php
      }

    ?>
 
</table>

</div>


<?php include('partials/footer.php');?>