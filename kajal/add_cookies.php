<?php

	//echo time();

	setcookie("product_name","jeans", time() +3600, "/");
	setcookie("product_price","10000",time() + 3600, "/");

 ?>


 <a href="show_cookie.php">show</a>
 <a href="delete_cookie.php">delete</a>


 <!-- cookies is temporary storage of data.eg cart in flipcart -->