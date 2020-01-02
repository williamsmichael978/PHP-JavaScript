<?php 
	require_once('michael_williams_database.php');
	$studentID = filter_input(INPUT_GET, 'studentID');
	//echo $studentID;
	
	$query = "SELECT * FROM student 
				WHERE studentID = :studentID";
	
	$statement = $db->prepare($query);
	$statement->bindValue(':studentID', $studentID);
	$statement->execute();
	$s = $statement->fetch();
	echo $s['studentID'].'-';
	echo $s['name'].'-';
	echo $s['email'].'-';
	echo $s['GPA'];
?>