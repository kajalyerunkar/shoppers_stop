<?php

	input("file");

	function input($type){
		//echo $type;
		echo "<input type='$type' />";

	}

	input2("text");

	function input2($type){
		//echo $type;
		echo "<input type='$type' />";
		
	}

	table(3,4);

	function table($cols,$rows){

		echo "<table border='1'>";
		for($j=1;$j<=4;$j++){
			echo "<tr>";
			for($i=1;$i<=4;$i++){
				echo "<td>";
				echo "test";
				echo "</td>";
				}
			echo "</tr>";
			}
		echo "</table>";
	}


?>