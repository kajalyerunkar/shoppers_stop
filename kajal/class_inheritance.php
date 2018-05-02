<?php 
	abstract class tv{

		public $color="rgb";
		public $sound="dolby";

	}
	class sonytv extends tv{
		public $smarttv="android";

	}

	$remote= new sonytv();
	echo "<pre>";
	print_r($remote);
	echo "</pre>";
?>



<!-- always make object of child class only. -->