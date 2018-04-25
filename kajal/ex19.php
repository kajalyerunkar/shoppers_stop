<?php
	
	//array sorting
	$data=array(100,200,170,80);

	echo "<pre>";
	print_r($data);
	echo "</pre>";

	//numeric array

	// sort($data);   reset the index value
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	// rsort($data);     reset the index value
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	// asort($data);     it doesnt reset the index value
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	// arsort($data);     it doesnt reset the index value
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	krsort($data);       //reverse the key value
	echo "<pre>";
	print_r($data);
	echo "</pre>";

	ksort($data);      //arrange the key value in assending order
	echo "<pre>";
	print_r($data);
	echo "</pre>";

?>