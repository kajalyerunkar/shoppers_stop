<?php 

	// odd no square $ even no cube
	for($i=1; $i<=5; $i++)
	{
		if($i%2==0)
		{
			echo pow($i,3);
		}
		else{
			echo $i*$i;
		}
		echo " ";
	}

	
?>