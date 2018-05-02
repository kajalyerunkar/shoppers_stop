<?php 

	//class with access specifier;
	class tv{

		public $color="rgb";
		public $sound="dolby";
		protected $channel1="zee tv";
		private $channel2="star";


		public function show_channel(){

			echo "<hr />";
			echo "<pre>";
			print_r($this);
			echo "</pre>";	

			echo $this->sound;
			echo $this->color;
			echo $this->channel1;
			echo $this->channel2;


			}

		}

	$remote= new tv;
	echo "<pre>";
	print_r($remote);
	echo "</pre>";

	//echo $remote->channel1;
	//echo $remote->channel2

	$remote->show_channel();

?>
