<!DOCTYPE html>
     <?php
        include ('connection.php');
        error_reporting(0);
            $UserFName= $_POST['First_Name'];
            $UserLName= $_POST['Last_Name'];
            $UserHName=$_POST['house_Name'];
            $UserEmail= $_POST['umail'];
            $UserContact=$_POST['ucon'];
            $userAddress= $_POST['add'];

                if (!$_POST['submit']) {
                    echo "<center><font color='red'><b>Note:All fields are required.<br>Don't change the House Code Please!</b></font></center>";
                }
                else 
                {
                    $sql = "INSERT into booking(F_name,L_name,House_name,Email,Contact,Address) values ('$UserFName','$UserLName','$UserHName','$UserEmail','$UserContact','$userAddress')";
                    if (mysqli_query($conn,$sql)) {
                        echo "<script> alert('You have confirmed a house!We will call you soon.')</script>";
                    }
                    else
                    {
                        echo "<script> alert('Sorry,The House is Booked.Do Live Chat if confusion!Thanks.')</script>";
                    }
                }
        ?>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="author" content="Ansar Uddin Emon"/>
	<meta name="description" content="TO-LET System"/>
	<meta name="keywords" content="MESS,HOSTELS,BACHELOR HOUSES RAJSHAHI"/>

	<title>TO-LET MANAGEMENT SYSTEM</title>
	<!-Ading CSS Here->
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
	<!-Header starts here->
    <header class="header">
    	<div class="wrapper">
    		<h1>TO-LETs RAJSHAHI</h1>
    	</div>
    </header>
    <!-Header Ends here->

    <!-Menu starts here->
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
    <!-Menu Ends here->

    <!-Main Body starts here->
    <div class="main">
    	<div class="wrapper">
          <div class="book-house">
    		<h3>Book Your House Here</h3>

    		<!-House Details Here->

           <!--  <img src="to-let.jpg"> -->
           <center>
            <a href="https://www.google.com/maps">Search Location Here.</a><br>
            
            <?php
               
                $imgcode=$_GET['ic'];
                $query="SELECT * FROM display_images WHERE Name='$imgcode' ";
                $result = mysqli_query($conn,$query);

                echo "<table align='center' border='2' bgcolor='teal'>";
                echo "<center><h1><font  color='blue'><b>Details of House Code: '$imgcode' </b></font><h1></center>";
                echo "<tr><th style='color:aqua'>Code</th><th style='color:aqua'>Description</th><th style='color:aqua'>House Owner Contact</th><th style='color:aqua'>Address</th><th style='color:aqua'>Time</th><th style='color:aqua'>Images</th></tr>";
                while ($value=mysqli_fetch_array($result)) {
    //echo $value ['Name'], " " ;
    //echo $value ['Email'], " ", "<br>";
        echo "<tr><td style='color:white'>";
        echo $value['Name'], "  ";
        echo "</td> <td style='color:white'>";
        echo $value['description'], "  ";
        echo "</td> <td style='color:white'>";
        echo $value['contact'], "  ";
        echo "</td> <td style='color:white'>";
        echo $value['location'], "  ";
        echo "</td> <td style='color:white'>";
        echo $value['time'], "  ";
        echo "</td> <td style='color:white'>"; ?>
        <img src="<?php echo $value["images"] ;?>" heigth="300" width="500"/><?php
        echo  "</td> </tr>";
                 }
                 echo "</table>";
            ?>
           
    	   </center>
    	   </div>
            <!-Client details booking Entry->
            <div class="booking-details">
                <h3>Your Booking Details</h3>
            
                <form action="book_house.php" method="POST">
                <span class="name" >First Name</span>
                <input type="text" name="First_Name" placeholder="Your First Name Please" required="true"><br/>

                <span class="name" >Last Name</span>
                <input type="text" name="Last_Name" placeholder="Your Last Name Please" required="true"><br/>

                <span class="name" >House Code</span>
                <input type="text" name="house_Name" value="<?php echo $imgcode; ?>"> <br/>

                <span class="name" >E-Mail</span>
                <input type="email" name="umail" placeholder="Your E-mail Please" required="true"><br/>

                <span class="name" >Contact</span>
                <input type="tel" name="ucon" placeholder="Your Contact Number Please" required="true"><br/>


                <span class="name" >Address</span>
                <textarea name="add" placeholder="Your Address Please" required="true"></textarea> <br/>

                <input type="submit" name="submit" placeholder="Book Now">
                <input type="Reset" name="Reset" placeholder="RESET">
            </form>
            </div>
    	</div>
    </div>
    <!-Main Body ends here->

    <!-Footer starts here->
    <footer class="footer">
    	<div class="wrapper">
    		<p>&copy;<a href="#">House rental system</a>.All rights reserved 2018</p>
    	</div>
    </footer>
    <!-Footer ends here->

</body>
</html>