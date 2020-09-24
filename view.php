<!DOCTYPE html>

<html>
<head>
	<title>  </title>
</head>
<body>
	<h1>PHP connect to MySQL</h1>
<?php
include "..\login\connection_mysqli.php";
$sqlget = "SELECT * FROM users";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error');
echo "<table>";
echo "<tr><th>Username</th><th>Email</th><th>Mobile</th><th>Address</th></tr>";
//loop
while($row= mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){  
		echo "<tr><td>";
		echo $row['Username'];
		echo "</td> <td>";
		echo $row['Email'];
		echo "</td> <td>";
		echo $row['Mobile'];
		echo "</td> <td>";
		echo $row['Address'];
		echo "</td> </tr>";
      }

     echo "</table>";
?>
</body>
</html>
//from admin


<!-<?php
$msg=" ";
include "..\login\connection1.php";
if(isset($_POST['upload'])){
	
	$image=$_FILES['image']['name'];
	
	$text = mysqli_real_escape_string($db, $_POST['text']);
	

	$target ="images/".basename($image);
	

	$sql= "INSERT INTO images (image,text) VALUES ('$image','$text')";
	mysqli_query($sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg= "Image uploaded successfully";
     }else{
		$msg="There was a problem uploading image";
	}
}
$result = mysqli_query("SELECT * FROM images");

?> -->