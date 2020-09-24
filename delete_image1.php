<?php

include "..\login\connection.php";
$idd= $_GET['iid'];
$query= "DELETE FROM bachelor_images WHERE code='$idd' ";
$data= mysqli_query($conn,$query);
if ($data) {
	echo "<font color='Green'><script> alert('Record Deleted from table')</script></font>";
}
else 
{
	echo "<font color='red'>Sorry!Can't Delete!";
}

?>