<?php
	require_once "includes/conexionBD.php";
	include ("include/funciones.php")

	if (!isset($_POST['login'])) {
		header("Location:index.php");
	}
	$nombreL=$_POST['nameLogin'];
	$passL=$_POST['passLogin'];

	if (esUsuario($nombreL,$passL)) {
		$_SESSION['perfil']="admin";
		$_SESSION['usuario']=$nombreL;
	}
	print_r($_SESSION);



?>