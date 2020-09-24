<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="author" content="Ansar Uddin Emon"/>
	<meta name="description" content="TO-LET System"/>
	<meta name="keywords" content="MESS,HOSTELS,BACHELOR HOUSES RAJSHAHI"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="search.css">
	<title>TO-LET MANAGEMENT SYSTEM</title>
	<!-Ading CSS Here->
	
	<!-Resource File for Slider->
	<!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="Slider/engine1/jquery.js"></script>
     <!-- End WOWSlider.com HEAD section -->

</head>

<body bgcolor="silver">
	<!-Header starts here->
    <header class="header">
    	<div class="wrapper">
    		<h1>TO-LETs RAJSHAHI</h1>
                <div class="search">
            <form action="search_asi.php" method="POST">
            <input type="text" class="searchTerm" name="search" placeholder="Search Location" required="true">
            <button type="submit" class="searchButton" name="submit-search">GO</button>
            </form>
            <h3>Search Location Here</h3>
            </div> 
            
    	</div>
    </header>
    <!-Header Ends here->

    <!-Menu starts here->
    <nav class="menu">
    	<div class="Link">
    		<ul>
    			<a href="#"><li>Home</li></a>
    			<a href="about_asi.htm"><li>About</li></a>
    			<a href="home_new.html"><li>Houses</li></a>
    			<a href="contact.php"><li>Contact</li></a>
    			<a href="index.php"><li>Sign Out</li></a>
                <a href="login_asi.php"><li>Admin</li></a>
                <a href="header.php"><li>Live Chat</li></a>
    		</ul>
    	</div>
    </nav>
    <!-Menu Ends here->

    <!-Slider starts here->
    	<div class="slider">
    	<div class="wrapper"> 
    	  
    	  <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="Slider/data1/images/3602apollobachelorpad1.jpg" alt="RH Chatrabas" title="RH Chatrabas" id="wows1_0"/></li>
		<li><img src="Slider/data1/images/hollywoodshouseoftheyear1.jpg" alt="Darul Bosir Chatrabas" title="Darul Bosir Chatrabas" id="wows1_1"/></li>
		<li><img src="Slider/data1/images/bachelorpadideas001.jpg" alt="Ryans Chatrabas" title="Ryans Chatrabas" id="wows1_2"/></li>
		<li><img src="Slider/data1/images/7319uniladimageoptimmansion.jpg" alt="Ryans Extension Chatrabas" title="Ryans Extension Chatrabas" id="wows1_3"/></li>
		<li><a href="http://wowslider.net"><img src="Slider/data1/images/bachelorpad1.jpg" alt="jquery carousel" title="Rose Tower Chatrabas" id="wows1_4"/></a></li>
		<li><img src="Slider/data1/images/maxresdefault.jpg" alt="Chistia Chatrabas" title="Chistia Chatrabas" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="RH Chatrabas"><span><img src="Slider/data1/tooltips/3602apollobachelorpad1.jpg" alt="RH Chatrabas"/>1</span></a>
		<a href="#" title="Darul Bosir Chatrabas"><span><img src="Slider/data1/tooltips/hollywoodshouseoftheyear1.jpg" alt="Darul Bosir Chatrabas"/>2</span></a>
		<a href="#" title="Ryans Chatrabas"><span><img src="Slider/data1/tooltips/bachelorpadideas001.jpg" alt="Ryans Chatrabas"/>3</span></a>
		<a href="#" title="Ryans Extension Chatrabas"><span><img src="Slider/data1/tooltips/7319uniladimageoptimmansion.jpg" alt="Ryans Extension Chatrabas"/>4</span></a>
		<a href="#" title="Rose Tower Chatrabas"><span><img src="Slider/data1/tooltips/bachelorpad1.jpg" alt="Rose Tower Chatrabas"/>5</span></a>
		<a href="#" title="Chistia Chatrabas"><span><img src="Slider/data1/tooltips/maxresdefault.jpg" alt="Chistia Chatrabas"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="Slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="Slider/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
    	  </div>
    	</div>

    <!-Slider Ends here->
    <!-Main Body starts here->
       


    <div class="main">
    	<div class="animation">
    	<marquee>We are now in <span style="color:blue;font-weight:bold">RAJSHAHI. </span>
    	Contact with us.Mobile:<span style="color:blue;font-weight:bold">+8801521325943. </span> 
    	Email: <span style="color:blue;font-weight:bold">aansaremon@gmail.com. </span>
    	Please sign in to chat with us.We are always here to reach you!</marquee>
    </div>
    	<div class="wrapper">
    		<h3>Recently Added</h3>
    		<!-Displaying Recently Added Houses in->
    		<!-- <div class="clearfix">
    		<div class="houses">  -->
            
                       
                        <?php
                       mysql_connect("localhost", "root", "");
                        mysql_select_db("login");
                       $res=mysql_query("select * from display_images");
                       echo "<center>";
                      echo "<table  align='center' border='1'  bgcolor='silver' bordercolor='gray'>";
                     echo "<tr ><th style='color:blue'>Image</th><th style='color:blue'>Image Code</th><th style='color:blue'>Time</th><th style='color:blue'>Location</th><th style='color:blue'>Book here</th></tr>";
                       while ($row=mysql_fetch_array($res)) {
    
                
                echo"<tr>";
                echo "<td bgcolor='teal'>";
                ?>
                <img src="<?php echo $row["images"]; ?>" height="300" width="500"/><?php echo "</td>";
                echo "<td bgcolor='teal' style='color:white'> "; ?> <span class="house-title"><?php  echo $row["Name"] ?></span><br/><?php echo "</td>";
                echo "<td bgcolor='silver' style='color:white'>"; ?> <span class="house-added">Added Date: <?php echo $row["time"] ?></span><?php echo "</td>";
                echo "<td bgcolor='aqua' style='color:white'>"; ?> <span class="house-Location"><?php echo $row["location"] ?></span><br/><?php echo "</td>";
               echo "<td>"; ?> <?php echo "<a href='book_house.php?ic=$row[Name]'>";?><button style="background-color: purple;color: white;" type="button" class="btn-book">Book House</button> </a>
            
        <?php echo "</td>";
               echo"</tr>";
                                                 }        
                        echo "</table>";
                        echo "</center>";
                       ?>
              </div>
              

    		<!-- <div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">RH Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Islampur</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>

    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Chistia Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Islampur</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>

    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Rose Tower Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Vodra</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a>
    		</div>
    		<div class="houses">
    			<img src="to-let.jpg"/>
    			<span class="house-title">Ryans Tower Chatrabash</span><br/>
    			<span class="house-added">Added Date: 01-01-18</span><br/>
    			<span class="house-Location">Location: Vodra</span><br/>
    					<a href="book.php" >
    			<button type="button" class="btn-book">Book House</button>
    		</a> 
    		</div>
			</div>-->
    			<h3>Bachelor Houses
                <div class="search">
            <form action="search_asi1.php" method="POST">
            <input type="text" class="searchTerm" name="search" placeholder="Search Bachelor Houses Location" required="true">
            <button type="submit" class="searchButton" name="submit-search">GO</button>
            </form>
            <h3>Search Location Here</h3>
            </div> </h3>

    		<!-Displaying Bachelor Houses in->
    		<div class="clearfix">
    		<?php
                       mysql_connect("localhost", "root", "");
                        mysql_select_db("login");
                       $res=mysql_query("select * from bachelor_images");
                       echo "<center>";
                      echo "<table  align='center' border='1'  bgcolor='silver' bordercolor='gray'>";
                     echo "<tr ><th style='color:blue'>Image</th><th style='color:blue'>Image Code</th><th style='color:blue'>Time</th><th style='color:blue'>Location</th><th style='color:blue'>Book here</th></tr>";
                       while ($row=mysql_fetch_array($res)) {
    
                
                echo"<tr>";
                echo "<td bgcolor='teal'>";
                ?>
                <img src="<?php echo $row["images"]; ?>" height="300" width="500"/><?php echo "</td>";
                echo "<td bgcolor='teal' style='color:white'> "; ?> <span class="house-title"><?php  echo $row["code"] ?></span><br/><?php echo "</td>";
                echo "<td bgcolor='silver' style='color:white'>"; ?> <span class="house-added">Added Date: <?php echo $row["time"] ?></span><?php echo "</td>";
                echo "<td bgcolor='aqua' style='color:white'>"; ?> <span class="house-Location"><?php echo $row["location"] ?></span><br/><?php echo "</td>";
                echo "<td>"; ?> <?php echo "<a href='book_house1.php?ic=$row[code]'>";?><button style="background-color: purple;color: white;" type="button" class="btn-book">Book House</button> </a>
            
        <?php echo "</td>";
               echo"</tr>";
                                                 }        
                        echo "</table>";
                        echo "</center>";
                       ?>
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