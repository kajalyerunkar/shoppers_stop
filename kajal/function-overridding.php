<?php

	abstract class tv{
		function show_channel(){
			echo "DD TV";
		}
	}

	class sonytv extends tv{

		function show_channel(){
			echo "SONY TV";
			//this->showchannel();
			tv::show_channel();
			parent::show_channel();     //scope resolution operator...
		}


	}

	$remote = new sonytv();
	$remote->show_channel();

?>