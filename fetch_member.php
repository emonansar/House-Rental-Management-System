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

$query = "SELECT * FROM users";
$result = mysql_query($query);

echo "<table align='center' border='5' bgcolor='teal'>";
echo "<center><h1><font color='blue'><b>Members in Website</b></font><h1></center>";
echo "<tr><th style='color:aqua'>Username</th><th style='color:aqua'>Surname</th><th style='color:aqua'>Email</th><th style='color:aqua'>Contact</th><th style='color:aqua'>Address</th><th colspan='2' style='color:aqua'>Operation</th></tr>";
while ($value=mysql_fetch_array($result)) {
	//echo $value ['Name'], " " ;
	//echo $value ['Email'], " ", "<br>";
		echo "<tr><td style='color:white'>";
		echo $value['username'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Surname'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Email'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Contact_No'], "  ";
		echo "</td> <td style='color:white'>";
		echo $value['Address'], "  ";
		echo "</td> <td>";
		echo "<a href='deletemem1.php?Usermail=$value[Email]'><font color='yellow' ><b>DELETE </b></font></a>", "<font color='white' ><b>||</b></font> ";
		echo "<a href='updatemember1.php?Usermail=$value[Email]&ad=$value[Address]&mb=$value[Contact_No]&un=$value[username]&sn=$value[Surname]'> <font color='yellow' ><b>UPDATE</b></font> </a>";
		echo  "</td> </tr>";
}

?>
<div class="foot"><a href="admin.php">BACK</a></div>

</html>