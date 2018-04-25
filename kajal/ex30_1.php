<?php
	
	include("ex30.php");
	echo "<pre>";
	print_r($ex30_1);
	echo "</pre>";

?>

 <table border="1" width="800" align="center">
	<tr>
		<?php 
			foreach($ex30_1 as $key=> $val){
				echo "<td>";
				echo "<img src='$val[2]' />";
				echo "<h2>$val[1]<h2>";
				echo "<p>$val[0]</p>";
				echo "</td>";
			}

		?>
	</tr>
</table> 