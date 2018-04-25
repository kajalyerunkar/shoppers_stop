<?php
 
 	define('USER','akshay',true);
 	if(defined('USER')){     //here defined is to check whether the constant exist or not

 		echo user;
 	} 
 	else{

 		echo "not exist";
 	}
?>