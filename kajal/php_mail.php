<?php 

	$to="kajalyerunkar11@gmail.com";

	$subject="TEST MAIL FROM PHP CODE";
	$txt="hello world";
	$headers="from: <vishal@php_training.in>";

	$result=mail($to,$subject,$txt,$headers);
	var_dump($result);

?>