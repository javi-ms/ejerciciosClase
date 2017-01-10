<?php
	session_start();
	include("includes/funciones.php");

	if (!isset($_POST['regProduc'])) {
		header("Location:anadirProducto.php");
	}
	$descripcion=$_POST['descripcion'];
	$familia=$_POST['familia'];
	$pvp=$_POST['pvp'];

	if (empty($descripcion)||empty($familia) ||empty($pvp)) {
		header("Location:anadirProducto.php?mensaje=vacios");
	}else{
		anadirProducto();
		header("Location:anadirProducto.php?mensaje=anadido");
	}
?>