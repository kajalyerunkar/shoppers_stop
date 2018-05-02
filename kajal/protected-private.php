<?php

	abstract class tv{

		public $color="rgb";
		public $sound="dolby";
		protected $channel1="zee tv";
		private $channel2="star";

	}
	class sonytv extends tv{
		
		public function show_record(){

			echo "<hr />";
			echo $this->sound;
			echo $this->color;
			echo $this->channel1;
			echo $this->channel2;
			} 
	} 


	$remote = new sonytv;
	echo "<pre>";
	print_r($remote);
	echo "</pre>";

	$remote->show_record();
?>