<?php 
	
	require_once('functions.php');
	require_once('config.php');
	// $project->connection();

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Registration Form</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
 		
 		<div class="registration">	
	 		<form action="" method="POST">

	 			<label for="email_address">Email Address</label><br>
	 			<input type="email" id="email_address" name="email_address"><br>


	 			<label for="password">Password</label><br>
	 			<input type="password" id="password" name="password"><br>

	 			<input type="submit" value="Login" name="login">
	 		</form>

 		</div>


 </body>
 </html>