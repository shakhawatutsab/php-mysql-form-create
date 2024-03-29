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
	<title>Members</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<table class="table" border="1">

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