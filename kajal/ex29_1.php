<?php
	
	//7 gobal arrays
	print_r($_GET);
	echo "<br>";

	print_r($_REQUEST);

	foreach($_REQUEST as $val){

		echo $val." ";
	}
?>