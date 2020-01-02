<?php 
require_once('michael_williams_database.php');
$GPA = filter_input(INPUT_GET, 'GPA');
//echo $GPA;

$query = "SELECT * 
		  FROM student 
		  WHERE GPA > :GPA
		  ORDER BY studentID";
				
	$statement = $db->prepare($query);
	$statement->bindValue(':GPA', $GPA, PDO::PARAM_STR);
	$statement->execute();
	$student = $statement->fetchAll();
?>

<h2>Student List (Students with GPA higher than <?php echo $GPA; ?>): </h2>

<table cellpadding="0" cellspacing="0" style="width: 100%">
			<tr>
			  <th>StudentID</th>
			  <th>Name</th>
			  <th>Email</th>
			  <th>GPA</th>
			  <th></th>
			</tr>
			<?php 
			foreach ($student as $s) 
			{
			?>
			<tr>
                <td><?php echo $s['studentID']; ?></td>
                <td><?php echo $s['name']; ?></td>
				<td><?php echo $s['email']; ?></td>
				<td><?php echo $s['GPA']; ?></td>
            </tr>
            <?php 
            }
            ?>
          	</table>