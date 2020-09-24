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
                    echo "All fields are required";
                }
                else 
                {
                    $sql = "INSERT into booking(F_name,L_name,House_name,Email,Contact,Address) values ('$UserFName','$UserLName','$UserHName','$UserEmail','$UserContact','$userAddress')";
                    if (mysqli_query($conn,$sql)) {
                        echo "You have confirmed a house!We will call you soon.";
                    }
                    else
                    {
                        echo "Something went wrong ,try again later";
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

            <img src="to-let.jpg">
            
            <span class="house-added">01-01-18</span><br/>
            <span class="house-Location">Islampur,Debisingh Para,Boalia, Rajshahi</span><br/>
            <span class="house-price">10000 Tk. Per Month</span><br/>
    		<p>
                Important Details of This Mess/Chatrabash:<br/>
                 1. 3 Rooms <br/>
                 2. 2 Bathrooms (1 Attached)<br/>
                 3. Gas Facility<br/>
                 4. 2 Belconies <br/>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d908.5989413979319!2d88.62381067527564!3d24.367532095528656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefd1c66bdcfd%3A0x52e3447bd7aef572!2sIqbal+Hotel!5e0!3m2!1sen!2sbd!4v1531062788216" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
         
                 <br/>
            </p>
    	
    	   </div>
            <!-Client details booking Entry->
            <div class="booking-details">
                <h3>Your Booking Details</h3>
            
                <form action="book.php" method="POST">
                <span class="name" >First Name</span>
                <input type="text" name="First_Name" placeholder="Your First Name Please"><br/>

                <span class="name" >Last Name</span>
                <input type="text" name="Last_Name" placeholder="Your Last Name Please"><br/>

                <span class="name" >House Name</span>
                <input type="text" name="house_Name" placeholder="Give house name Please"><br/>

                <span class="name" >E-Mail</span>
                <input type="email" name="umail" placeholder="Your E-mail Please"><br/>

                <span class="name" >Contact</span>
                <input type="tel" name="ucon" placeholder="Your Contact Number Please"><br/>


                <span class="name" >Address</span>
                <textarea name="add" placeholder="Your Address Please"></textarea> <br/>

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