<?php
	 	$conn=mysqli_connect("localhost","root","","eshopper_project");
	 	//print_r($_post);
	 	if (empty($_POST['username'])){
	 		echo "enter name";
	 	}
	 	else if(empty($_POST['usersalary'])){
	 		echo "enter salary";
	 	}
	 	else{
	 		//echo 1

	 		$name=$_POST['username'];
	 		$sal=$_POST['usersalary'];

	 		$sql="insert into person (pname,psalary) values('$name','$sal')";

	 		//echo $sql;
	 		$result=$conn->query($sql) or die($conn->error);

	 		if($result){
	 			header("location:get_data_table.php");
	 		}
	 	}

?> 
