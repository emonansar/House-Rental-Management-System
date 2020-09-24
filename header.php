<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Login for Chat</title>
	
</head>
<body>
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
	<div id="main">
		<div id="info">
			<center>
			<h2>Login Here<font color="red">(Formal Chat Only)</font></h2>

			<form action="logged.php" method="POST">
				<label><b>Username</b></label>
				<input type="text" name="uname" placeholder="User Name"><br><br>
				<label><b>Password</b></label>
				<input type="password" name="pass" placeholder="User Name" required="true"><br><br>
				<button style="background-color: #6495ed;color: white;" type="submit" name="submit"><b>Login</b></button><br><br>
				<a href="create.php">Create Account Here</a>
			</form>
		</center>
		</div>
	</div>

</body>
</html>
