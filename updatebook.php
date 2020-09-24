 <?php
 error_reporting(0);
 include "..\login\connection.php";
/*echo $_GET['Usermail'];
echo $_GET['ad'];
echo $_GET['mb'];
echo $_GET['un'];*/
//$umail= $_GET['Usermail'];
?>
<html><center>
 <h1>Update Booking Account Here</h1>
                <form action=" " method="GET">
                <span class="name" >First Name</span>
                <input type="text" name="First_Name" value="<?php echo $_GET['fn']; ?>" placeholder="Your First Name Please" required="true"><br/>

                <span class="name" >Last Name</span>
                <input type="text" name="Last_Name" value="<?php echo $_GET['ln']; ?>" placeholder="Your Last Name Please" required="true"><br/>

                <span class="name" >House Code</span>
                <input type="text" name="house_Name" value="<?php echo $_GET['hc']; ?>"> <br/>

                <span class="name" >E-Mail</span>
                <input type="email" name="umail" value="<?php echo $_GET['Usermail']; ?>" placeholder="Your E-mail Please" required="true"><br/>

                <span class="name" >Contact</span>
                <input type="tel" name="ucon" value="<?php echo $_GET['mb']; ?>" placeholder="Your Contact Number Please" required="true"><br/>


                <span class="name" >Address</span>
                <input type="text"  name="add" value="<?php echo $_GET['ad']; ?>" placeholder="Your Address Please" required="true"></textarea> <br/>

                <input type="submit" name="submit" value="Update"/>
                <!-- <input type="Reset" name="Reset" placeholder="RESET"> -->
            </form>
             <?php
             if (isset($_GET['submit'])) {
             	$fname=$_GET['First_Name'];
              $lname=$_GET['Last_Name'];
             	$address=$_GET['add'];
             	/*$email=$_GET['umail'];*/
             	$mobile=$_GET['ucon'];
              $housecode=$_GET['house_Name'];
				$query="UPDATE booking SET F_name='$fname',L_name='$lname',Contact='$mobile',Address='$address' WHERE House_name='$housecode' ";
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
                  	echo "<font color='Red'>House Code & Email can't be updated.</font><br/>";
                  }
                ?>
                <br/><a href="fetch_book.php"><h3>See the updated data.</a><a href="admin.php"><br/>Go to admin pannel.</a></h3>
                </center>
    </html>
