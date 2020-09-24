<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
	<title>Home</title>
		  <nav class="menu">
    	  <div class="Link">
    		<ul>
    			<a href="index_asi.php"><li>Home</li></a>
    			<a href="about_asi.htm"><li>About</li></a>
    			<a href="home_new.html"><li>Houses</li></a>
    			<a href="contact.php"><li>Contact</li></a>
    			<a href="index.php"><li>Sign Out</li></a>
                <a href="login_asi.php"><li>Admin</li></a>
    		</ul>
    	</div>
    </nav>
</head>
<body>

<div id="main">
	
<h1 style="background-color: #6495ed;color:white;"><?php echo $_SESSION['name'] ?>-online</h1>

     <div class="output">
		<?php
		$sql="SELECT * FROM post";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_num_rows($result);
		if ($row>0) {
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<font color='blue'>".$row["name"]."</font>:::" .$row["msg"]."---Date & time:" .$row["date"].  "<br>";
				echo "<br>";
			}
		} else{
			echo "0 results";
		}
		$conn ->close();
		?>

      </div>
      <form method="POST" action="send.php">
      <textarea name="msg" placeholder="Type to send message...." class="form-control"></textarea><br/>
      <input type="submit" value="send">
      </form>
      <br>
      <form action="logout.php">
      	<input style="width: 100%;background-color:#6495ed;color:white;font-size: 20px; " type="submit" value="Logout">
      </form>

</div>
</body>
</html>