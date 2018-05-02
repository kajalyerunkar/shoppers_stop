<?php

	class tv{

	var	$color="rgb";
	var	$sound="Dolby";
	var $power=["on","off"];

		function channel(){
			echo "zee tv";
		}
		

		function newchannel(){
			echo 1000;
			return "start tv";
			echo 10000;
		}
			
		const PI=3.142;


	}

	$remote=new tv;
	echo "<pre>";
	print_r($remote);
	echo "</pre>";
	echo "<br>";

	echo $remote->color;
	echo "<br>";
	echo $remote->sound;
	echo "<br>";
	echo $remote->power[0];
	echo "<br>";
	echo $remote->power[1];
	echo "<br>";


	$remote->channel();
	echo "<br>";

	echo $remote->newchannel();
	echo "<br>";


	echo tv::PI;

?>

	