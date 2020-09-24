<?php
 error_reporting(0);
 include "..\login\connection.php";
 echo $_GET['lc'];
 echo $_GET['im'];
 ?>
 <html>
 <form action=" " method="GET" enctype="multipart/form-data"/>
	
	Name<input type="text" name="housename" value="<?php echo $_GET['nm']; ?>"/><br/>
	Description <input type="text" name="description" value="<?php echo $_GET['dc']; ?>"/><br/>
	Location <input type="text" name="location" value="<?php echo $_GET['lc']; ?>"/><br/>
	image <img src="<?php echo $_GET['im'];?>" height="150" width="150" />
	<input type="file" name="uploadfile" value="">
	<input type="submit" name="submit" value="Upload File"/>
     </form>
     <?php
     			$old_image=$_GET['uploadfile'];
             if (isset($_GET['submit'])) {
             	$name=$_GET['housename'];
             	$location=$_GET['location'];
             	$des=$_GET['description'];
             	
             	
             	if(isset($_FILES['uploadfile']['name']) && ($_FILES['uploadfile'] ['name']!=""))
             	//$img=$_GET['uploadfile'];
             	{
             		//$size=$_FILES["uploadfile"]["size"];
             		$tempname= $_FILES["uploadfile"] ["tmp_name"];
             		//$type=$_FILES['uploadfile']['type'];
             		$filename= $_FILES["uploadfile"] ["name"];
    			      $folder = "pictures/".$filename;	
    			    
    			      unlink("$old_image");
    			
    		     }
    		     else{
    		     	$filename=$old_image;
    		     }
				$query="UPDATE display_images SET images='$filename',description='$des',location='$location' WHERE Name='$name' ";
				$data=mysqli_query($conn,$query);
        move_uploaded_file($tempname, $folder);
        
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
                  	/*echo "<font color='Red'>Note:Enter mobile number in 11 digit.</font><br/>";
                  	echo "<font color='Red'>Email can't be updated.</font><br/>";*/
                  }
                ?>
                <br/><a href="fetch.php"><h3>See the updated data.</a><a href="admin.php"><br/>Go to admin pannel.</a></h3>
 </html>