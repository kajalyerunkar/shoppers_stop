<?php
	
	// extraction from array 
	
	$data=array("ajay",20,"mumbai");

	echo "<pre>";
	print_r($data);
	echo "</pre>";

	$cnt=count($data);

	for($i=0;$i<3;$i++){

		echo $data[$i];
		echo "<br />";
	}
	echo "<br />";

	$j=0;
	while($j<3){

		echo $data[$j];
		echo "<br>";
		$j++;
	}


?>