<?php
	//download dll files from dlldll.com
	//ext/php_mysqli.dll
	
	// check in php.ini
	//extension=php_mysqli.dll

	//php.net
	// mysql database => user table for connection parametrs

	$com= mysqli_connect("localhost","root","","eshopper_project");
	echo "<pre>";
	print_r($com);

?>