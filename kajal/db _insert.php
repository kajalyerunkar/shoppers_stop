<?php
	$conn= mysqli_connect("localhost","root","","eshopper_project");

	// create table person(
	// 	id int auto_increment primary key,
	// 	pname varchar(100),
	// 	psalary int
	// );
	
	//query prepare
	$insert_q="insert into person (pname,psalary) values ('kajal',20000)";

	//query execution
	$result=mysqli_query($conn, $insert_q) or die(mysqli_error($conn));
	var_dump($result);

	mysqli_close($conn);


?>
