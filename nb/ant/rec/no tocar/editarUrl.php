<?php

	//evitar invitado

	//condiciones de no eejcucion
	$key = $_GET['id'];
	$url = $_SESSION['urlUser'][$key]['url'];
	$desc = $_SESSION[][][];
	if (!isset($_POST['enviar'])) {
		//formulario
	}else{
		$_SESSION['urlUser'][$key]['url'] = 

	}
?>
<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="editarUrl.php">
		<input value="$url">
		<input value="$desc">
		<input value="enviar">
			
	</form>
</body>
</html>