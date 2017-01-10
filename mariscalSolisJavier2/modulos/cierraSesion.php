<?php
	
	unset($_SESSION['usuariosRegistrador']);
	unset($_SESSION['usuarioLogeado']);
	unset($_SESSION['multas']);
	session_destroy();
	header("Location: $_SERVER[PHP_SELF]");
?>