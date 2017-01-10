<?php
session_start();
	require_once "includes/conexionBD.php";
	include ("includes/funciones.php");

	if (!isset($_POST['login'])) {
		header("Location:index.php");
	}

	$proLog =$_POST['nameLogin'];
	$proPass =$_POST['passLogin'];
echo "hola";

	if (esUsuarioAdmin($proLog,$proPass)) {
		$_SESSION['perfil']="admin";
		$_SESSION['usuario']=$proLog;
		$_SESSION['autentificado']='si';
		header("Location:index.php");

	}elseif(esUsuarioCliente($proLog,$proPass)){
		$_SESSION['perfil']="cliente";
		$_SESSION['usuario']=$proLog;
		$_SESSION['autentificado']='si';
		header("Location:index.php");

	}

?>