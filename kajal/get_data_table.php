<?php
 	$conn=mysqli_connect("localhost","root","","eshopper_project");
 	$sql="select * from person";
 	$result=$conn->query($sql) or die($conn->error);
 	//print_r($result);

?>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="container">

<a href="add_record.php">Add record</a>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>SALARY</th>
			<th>DELETE</th>
		</tr>
		<?php 

			while($ans=$result->fetch_array(MYSQLI_ASSOC)){
				$id=$ans['id'];

				echo "<tr>";
				echo "<td>" . $ans['id'] . "</td>";
				echo "<td>" . $ans['pname'] . "</td>";
				echo "<td>" . $ans['psalary'] . "</td>";

				echo "<td><a href='delete_data.php?xyz=$id'> Delete</a></td>";
				echo "</tr>";
			}


		?>
	</table>
</div>