 <?php

 	require_once('functions.php');
 	require_once('config.php');


 	if(isset($_POST['register'])){

 		$fname = $_POST['firstname'];
 		$lname = $_POST['lastname'];
 		$email = $_POST['email_address'];
 		$password = $_POST['password'];

 		$error = array();

 		if($fname == NULL){
 			$error['fname'] = "First Name is blank";
 		}
		if($lname == NULL){
 			$error['lname'] = "last Name is blank";
 		}
		if($email == NULL){
 			$error['email'] = "email is blank";
 		}
		if($password == NULL){
 			$error['password'] = "password is blank";
 		}

 		elseif(strlen($password) <= 6){
 			$error['password'] = "password must be more than 6 character long";
 		}

 		if(count($error) == 0) {
 			$query = mysqli_query($connection, "INSERT INTO users (first_name,last_name,email_address,password) VALUES('$fname','$lname','$email','$password')");

 			if($query){
 				$success = "You Have been register!! Please <a href ='login.php'>Log In</a>"; 
 			}
 		}

 	}

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
	 				
	 			<label for="firstname">First Name</label><br>
	 			<input type="text" id="firstname" name="firstname"><br>

	 			<div class="error">
	 				<?php

	 					if(isset($error['fname'])){
	 						echo $error['fname'];
	 					}
	 				 ?>		
	 			</div>

	 			<label for="lastname">Last Name</label><br>
	 			<input type="text" id="lastname" name="lastname"><br>

	 			<div class="error">
	 				<?php

	 					if(isset($error['lname'])){
	 						echo $error['lname'];
	 					}
	 				 ?>		
	 			</div>

	 			<label for="email_address">Email Address</label><br>
	 			<input type="email" id="email_address" name="email_address"><br>

	 			<div class="error">
	 				<?php

	 					if(isset($error['email'])){
	 						echo $error['email'];
	 					}
	 				 ?>		
	 			</div>

	 			<label for="password">Password</label><br>
	 			<input type="password" id="password" name="password"><br>

	 			<div class="error">
	 				<?php

	 					if(isset($error['password'])){
	 						echo $error['password'];
	 					}
	 				 ?>		
	 			</div>

	 			<input type="submit" value="submit" name="register">
	 		</form>

	 		<div class="success">
	 			<?php 
	 				if(isset($success)){
	 					echo $success;
	 				}
	 			?>
	 		</div>
 		</div>
 	<table class="table" border="1" style="text-align: center; margin: auto;">

 		<h1 style="text-align: center;">Show Register Information</h1>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Password</th>
			</tr>
        <?php

        	$query = $connection->query("SELECT * FROM users");

        	while($row = $query->fetch_object()) : ?>

				<tr>
					<td><?php echo $row->first_name ?></td>
					<td><?php echo $row->last_name ?></td>
					<td><?php echo $row->email_address ?></td>
					<td><?php echo $row->password ?></td>
				</tr>

			<?php endwhile; ?>
	</table>

 </body>
 </html>