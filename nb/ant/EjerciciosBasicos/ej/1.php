<?php
//Escribe una página que permita crear una cookie de duración limitada, comprobar el estado de la cookie y destruirla.
/* Nombre de la cookie: usuario.
 Valor: "Edgar Allan Poe".
 Expira: En una hora: */

setcookie("user", "Edgar Allan Poe", time()+100);


	 if (isset($_COOKIE["user"])) {
	 echo "Welcome " . $_COOKIE["user"] . "!<br/>";
	 }
	 else {
	 echo "Usted es un invitado!<br>";
	 }
	
	echo $_COOKIE['user'];

	setcookie("user", "Edgar Allan Poe", time()+100);

	

?>