<?php 


if(file_exists(dirname(__file__).'/config.php')){
 		require_once(dirname(__file__).'/config.php');
 	}

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
 				$success = "You Have been register"; 
 			}
 		}

 	}

?>