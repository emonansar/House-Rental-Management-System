<?php
 error_reporting(0);
 include "..\login\connection.php";
 /*echo $_GET['lc'];
 echo $_GET['im'];*/
 ?>

 <html>
 <body><center>
    <form action=" " method="GET" />
    
    House Code:<input type="text" name="housename" value="<?php echo $_GET['nm']; ?>"/><br/>
    Description: <input type="text" name="description" value="<?php echo $_GET['dc']; ?>"/><br/>
    Location: <input type="text" name="location" value="<?php echo $_GET['lc']; ?>"/><br/>
    Time: <input type="text" name="time" value="<?php echo $_GET['tm']; ?>"/><br/>
    Contact: <input type="text" name="contact" value="<?php echo $_GET['mb']; ?>"/><br/>
    Image: <br>
    <img src="<?php echo $_GET['im'];?>" height="150" width="350" /><br>
    
    <input type="submit" name="submit" value="Update"/>
     </form>


     <?php
             if (isset($_GET['submit'])) {
                $name=$_GET['housename'];
                $location=$_GET['location'];
                $des=$_GET['description'];
                $tm=$_GET['time'];
                $mb=$_GET['contact'];
                $ic=$_GET['im'];
                /*$photo=$_FILES['photo']['name'];*/          
                $query="UPDATE bachelor_images SET description='$des', time='$tm',Mobile='$mb',location='$location' WHERE code='$name' ";
                  $data=mysqli_query($conn,$query);
        if($data)
        {

          echo "<font color='Blue'>Record is successfully updated.</font>";

        }
        else
        {
          echo "<font color='Red'>There is a problem occured.</font>";
        }
              }
                  else
                  {
                    echo "<font color='Green'>Update Button is not pressed yet.</font><br/>";
                    echo "<font color='Red'>Note:Enter mobile number in 11 digit.</font><br/>";
                    echo "<font color='Red'>House Code & Image can't be updated.</font><br/>";
                  }
                ?>
                <br/><a href="index_admin.php"><h3>See the updated data.</a><a href="admin.php"><br/>Go to admin pannel.</a></h3>
            </center>
    </body>
</html>
