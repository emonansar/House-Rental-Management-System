<?php
include 'connection.php';
?>
<form action="search.php" method="POST">
	<input type="text" name="search" placeholder="search">
	<button type="submit" name="submit-search">Search</button>
</form>
<h1>Search here via Location</h1>
<div class="location-container">
	<?php
		$sql="SELECT * FROM display_images";
		$result=mysqli_query($conn,$sql);
		$queryResults= mysqli_num_rows($result);

		if($queryResults>0){
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<div>
				<h3>".$row['location']."</h3>
				<p>".$row['description']."</p>
				<p>".$row['Name']."</p>
				<p>"?><img src="<?php echo $row["images"]; ?>" height="150" width="150"/><?php echo "</p>
				</div>" ;
			}
		}
	?>
	

</div>
</body>
</html>