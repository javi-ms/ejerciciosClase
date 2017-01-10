<?php
session_start();
	require_once "includes/conexionBD.php";
	include ("includes/funciones.php");

	if (!isset($_POST['registrarUser'])) {
		header("Location:index.php");
	}
	$formularioOk=false;

	$nameRegistro=$_POST['nameRegis'];
	$nameUsuario =$_POST['usuario'];
	$passRegistro=$_POST['passRegis'];
	$passRepetido=$_POST['passRe'];
	//
	if (empty($nameRegistro)||empty($nameUsuario) ||empty($passRegistro) ||empty($passRepetido)) {
		header("Location:newUser.php?mensaje=vacios");
	}elseif ($passRegistro!=$passRepetido) {
		header("Location:newUser.php?mensaje=noREP");
	}//si hay mas comprobacion mas elseif
	else{
		$formularioOk=true;
		
	}

	if ($formularioOk) {
		anadirUser($nameRegistro, $nameUsuario, $passRegistro);
		header("Location:index.php?mensaje=registrado");
	}

	

	