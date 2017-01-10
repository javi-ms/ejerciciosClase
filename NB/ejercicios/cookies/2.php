<?php 
	setcookie("user","Javier Mariscal Solis",time()+3600);

	if (isset($_COOKIE["user"])) {
		echo "la cookie esta creada y se llama ". $_COOKIE['user']. "<br/>";
		}

	if (isset($_COOKIE["user"])) {
	setcookie("user","",time()-3600);
		# code...
	echo "la cookie no existe";
	}
	

?>