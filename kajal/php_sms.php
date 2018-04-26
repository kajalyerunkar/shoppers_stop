<?php

//authorisation details.
	$username = "kajalyerunkar11@gmail.com";
	$hash = "a1f8778685ec454a322658a2b01781c5d727bda2a0bd8aef6cbd8fe6a2aad1dc";
	//config variables. constant http://api.textlocal.in/docs for more info.

	$test ="0";
	$sender ="TXTLCL";
	$numbers ="919967951186";
	$message = urlencode("hello this a test msg from php code");

	$url ="http://api.textlocal.in/send/?username=$username&hash=$hash&message=$message&sender=$sender&numbers=$numbers&test=$test";
	echo $url;
	//file(pass url) execution process
	$result=file($url);
	var_dump($result); 
