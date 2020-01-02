<?php
	$dsn = 'mysql:host=localhost;dbname=michael_williams_assignment_db';
	$username = 'michaelweb';
	$password = 'michaelchocolate';
	
	try {
		$db = new PDO($dsn, $username, $password);
		//echo "Successful in connecting to database<br>\n";
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		//echo $error_message;
		include('michael_williams_database_error.php');
		exit();
	}
?>