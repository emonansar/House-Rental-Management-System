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
 <h1>Update the Account Here</h1>
                <form action=" " method="GET">

                <span class="name" >UserName</span>
                <input type="text" name="Nam" value="<?php echo $_GET['un']; ?>" /><br/>

                <span class="name" >Surname</span>
                <input type="text" name="SNam" value="<?php echo $_GET['sn']; ?>" /><br/>

                <span class="name" >E-Mail</span>
                <input type="email" name="E_mail" value="<?php echo $_GET['Usermail']; ?>" /><br/>

                <span class="name" >Contact</span>
                <input type="text" name="U_contact" value="<?php echo $_GET['mb']; ?>" /><br/>

                <span class="name" >Address</span>
                <input type="text" name="add" value="<?php echo $_GET['ad']; ?>" /> <br/>

                <input type="submit" name="submit" value="Update"/>
               
            </form>
             <?php
             if (isset($_GET['submit'])) {
             	$name=$_GET['Nam'];
              $sname=$_GET['SNam'];
             	$address=$_GET['add'];
             	$email=$_GET['E_mail'];
             	$mobile=$_GET['U_contact'];
				$query="UPDATE users SET username='$name',Surname='$sname',Contact_No='$mobile',Address='$address' WHERE Email='$email' ";
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
                  	echo "<font color='Red'>Email can't be updated.</font><br/>";
                  }
                ?>
                <br/><a href="fetch_member.php"><h3>See the updated data.</a><a href="admin.php"><br/>Go to admin pannel.</a></h3>
                </center>
    </html>
