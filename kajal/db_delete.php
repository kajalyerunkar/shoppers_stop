<?php
	$conn= mysqli_connect("localhost","root","","eshopper_project");

	// create table person(
	// 	id int auto_increment primary key,
	// 	pname varchar(100),
	// 	psalary int
	// );
	
	//query prepare
	$delete_q="delete from person where id=1";

	//query execution
	$result=mysqli_query($conn, $delete_q) or die(mysqli_error($conn));
	var_dump($result);

	mysqli_close($conn);


?>
