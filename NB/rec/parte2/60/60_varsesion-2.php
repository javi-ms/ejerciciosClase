<?php
	session_start();
	$_SESSION['usuario']=$_REQUEST['campousuario'];
	$_SESSION['clave']=$_REQUEST['campoclave'];
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<title>Problema</title>
	</head>
	<body>
		Se almacenaron dos variables de sesión.<br><br>
		<a href="60_varsesion-3.php">Ir a la tercer página donde se recuperarán
		las variables de sesión</a>
	</body>
</html>