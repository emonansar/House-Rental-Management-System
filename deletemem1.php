<?php

include "..\login\connection.php";
//echo $_GET['Usermail'];
$umail= $_GET['Usermail'];
$query= "DELETE FROM users WHERE Email='$umail' ";
$data= mysqli_query($conn,$query);
if ($data) {
	echo "<font color='Green'><script> alert('Record Deleted from table')</script></font>";
}
else 
{
	echo "<font color='red'><script> alert('Sorry!Can't Delete!')</script></font>";
	
}

?>