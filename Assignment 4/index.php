<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">


		<title>Team Idiotville, Assignment 4</title>

		<link rel="stylesheet" href="css/styles.css">

		<link href="css/navigation.css" rel="stylesheet">
		<link rel="stylesheet" href="sss/sss.css">

		<link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
		

	</head>

		<div class="containerHome"> <!-- in order to use different grid values for the homepage -->

<header>
	<div class="logo"> <figure><a href="index.html"><img src="images/idiotville_banner.png" alt ="Logo"> 
	<br><h1>Idiotville   </h1> </a> </figure>
		<strong>CSC 174 - Advanced Front End Web Design </strong></div>

</header>


	<?php include "includes/navigation.inc" ?>

	<?php
		$dbhost = "localhost";
		$dbuser = "urcscon3_idiotv";
		$dbpass = "coffee1N";
		$dbname = "urcscon3_idiotv";
		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		$sql = "INSERT INTO urcscon3_idiotv (Name, EmailAddress, PhoneNumber, ProjectDescription) values ('ART', 'ART', 'ART', 'ART')"; 
		$result = $connection -> query ($sql);

		$Name = isset($_POST["Name"]) ? $_POST ["Name"] : "";
		$EmailAddress = isset($_POST["EmailAddress"]) ? $_POST ["EmailAddress"] : "";
		$PhoneNumber = isset($_POST["PhoneNumber"]) ? $_POST ["PhoneNumber"] : "";
		$ProjectDescription = isset($_POST["ProjectDescription"]) ? $_POST ["ProjectDescription"] : "";

		$sql = "INSERT INTO urcscon3_idiotv (Name, EmailAddress, PhoneNumber, ProjectDescription) values ('$Name', '$EmailAddress', '$PhoneNumber', '$ProjectDescription')"; 
		$result = mysqli_query($connection, $sql);
	?>	

	<body>
		
	<article>

	<!-- Add slideshow, gallery, or anything esle here -->

	<section><p>This is the Assignment 4 Website of Idiotville. The website features profiles of Computer Scientists Xiao Cheng, Charlie Lu, Xuanyang Wang and Economist Jimmy Yang. You can book their services for Web Design, Coding, Econometric Anlysis and Graphic Design through the Idiotville Website by filling out the form below and Team Idiotville will get in contact with you within twelve hours. </p>
	</section>		
			
	<div class="Form">  
  		<form id="contact" action="index.php" method="post">
   		<h3>Contact Us</h3>
    	<fieldset>
      		<input name = "Name" placeholder="Your name" type="text" tabindex="1" required autofocus>
    	</fieldset>
    	<fieldset>
      		<input name = "EmailAddress" placeholder="Your Email Address" type="email" tabindex="2" required>
    	</fieldset>
    	<fieldset>
      		<input name = "PhoneNumber" placeholder="Your Phone Number" type="tel" tabindex="3" required>
    	</fieldset>
    	<fieldset>
     		<textarea name = "ProjectDescription" placeholder="Briefly describe project...." tabindex="4" required></textarea>
    	</fieldset>
    	<fieldset>
      		<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    	</fieldset>
    
  		</form>
	</div>
			
<!--	<?php
// 		$query2 = "SELECT * FROM 'urcscon3_idiotv' ";
// 		$result2 = $connection->query($query2);

// if ($result2->num_rows > 0) {
// 	echo "<br> <p> Current Guestbook </p> <br>";
//    		while($row = mysqli_fetch_assoc($result2))
//     	{
//         		echo "
//         		<tr>
//             		<td>".$row["name"]."</td>
//            			<td>".$row["color"]."</td>
//         		</tr>
//         		";
//     		}
//     	}
	 ?>	-->	

	</article>

	</body>

	<footer>
		<strong>Team Idiotville
		<br>
		CSC 174: Advanced Web Design </strong>
	</footer>

	</div><!--.containerHome-->
	
</html>
