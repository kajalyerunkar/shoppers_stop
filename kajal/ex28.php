<?php
	
	// include("dummy.php");
	// include "dummy.php";
	// echo "<br>"
	// include_once "dummy.php";

	// require("dummy.php");
	// echo "<br>";
	// require "dummy.php";
	// require_once "dummy.php";


	// echo 1000;              //include stops the line execution bt continue page execution
	// include "dummy1.php";
	// echo 1000;

	echo 1000;
	require "dummy1.php";       //require stops the page execution once the error occured
	echo 1000;

?>