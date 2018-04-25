<?php

	//asociative array with exaction

	$data= array(

		"name"=>"kajal",
		"age"=>20,
		"place"=>"mumbai"
	); 

	echo "<pre>";
	print_r($data);
	echo "</pre>";

	foreach ($data as $a => $b) {
		echo $a;
		echo $b;
	}	

	foreach ($data as $a => $b) {
		echo "<br>";
		echo $b;
	}
?>