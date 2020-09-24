<!DOCTYPE html>
<html>


<style type="text/css">
	td{
		padding: 15px;
	}
	.foot{
         text-align:left;
	}

</style>


<?php

include "..\login\connection1.php";
//echo "Connection successful";

$query = "SELECT * FROM booking";
$result = mysql_query($query);

echo "<table align='center' border='5' bgcolor='teal'>";
echo "<center><h1><font color='blue'><b>Booking Members</b></font><h1></center>";
echo "<tr><th style='color:aqua'>House Code</th><th style='color:aqua'>First Name</th><th style='color:aqua'>Last Name</th><th style='color:aqua'>Email</th><th style='color:aqua'>Contact</th><th style='color:aqua'>Address</th><th colspan='2' style='color:aqua'>Operation</th></tr>";
while ($value=mysql_fetch_array($result)) {
	//echo $value ['Name'], " " ;
	//echo $value ['Email'], " ", "<br>";
		echo "<tr><td style='color:white'>";
		echo $value['House_name'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['F_name'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['L_name'], "  ";
		echo "</td><td style='color:white'>";
		echo $value['Email'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Contact'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Address'], "  ";
		echo "</td> <td>";
		
		echo "<a href='deletebook.php?Usermail=$value[House_name]'><font color='yellow' ><b>DELETE </b></font></a>", "<font color='white' ><b>||</b></font> ";
		echo "<a href='updatebook.php?Usermail=$value[Email]&ad=$value[Address]&mb=$value[Contact]&hc=$value[House_name]&fn=$value[F_name]&ln=$value[L_name]'> <font color='yellow' ><b>UPDATE</b></font> </a>";
		echo  "</td> </tr>";
}

?>
<div class="foot"><a href="admin.php">BACK</a></div>

</html>