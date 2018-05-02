<?php

	//storage class

	class tv{

		//private,protected,public(var)
		var $color = "rgb";
		var $sound = "Dolby";

	}
	//class outside=> instance creation
	//$remote=tv();
	//$remote=tv;

	//$remote = new tv;
	$remote = new tv;
	echo "<pre>";
	print_r($remote);
	echo "</pre>";
	echo "<br>";

	//echo $remote['color'];
	//echo $remote['sound'];

	echo $remote->color;
	echo $remote->sound;
	echo "<br>";

	foreach($remote as $ans){

		echo $ans;
	}




?>