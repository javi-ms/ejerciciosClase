<?php
//carga sesion
	session_start();
//borra variable de sesion
	unset($_SESSION);
//destruye sesion
	session_destroy();
//te reenvia al index 
	header("Location:../index.php");

?>