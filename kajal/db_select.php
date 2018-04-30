<?php

 	$conn=mysqli_connect("localhost","root","","eshopper_project");

	// $insert_q="insert into person (pname,psalary) values ('kajal',20000)";
 // 	$insert_q="insert into person (pname,psalary) values ('neelam',40000)";
	// $insert_q="insert into person (pname,psalary) values ('vaishali',2000)";




 	$sql="select * from person";
 	echo $sql;

 	$result=$conn->query($sql) or die($conn->error);


 	//var_dump($result)
 	echo "<pre>";
 	print_r($result);
 	echo "</pre>";

 	//actual Data fetch from Database

//object-> member (->accessor,=>associative operator)


 	//MYSQL_NUM,MYSQLI_ASSOC,MYSQLI_BOTH
 	//fetch_object(),fetch_array
 	while($ans=$result->fetch_object())
 	{
 		echo "<pre>";
 		print_r($ans);
 		echo "</pre>";
 	}


?>