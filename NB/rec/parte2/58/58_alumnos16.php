<html>
	<head>
		<title>Problema</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<!--
			Para borrar una cookie se debe llamar a la funcion setcookie con una fecha anterior a la actual.
			Haremos un algoritmo muy comun a muchos sitios que administran webmail. Recordaremos en una
			cookie el mail ingresado por el operador.
		-->
	</head>
	<body>
		<form action="58_alumnos16-2.php" method="post">
			Ingrese su mail:
			<input type="text" name="mailusuario" value="<?php if (isset($_COOKIE['mail'])) echo $_COOKIE['mail'];?>">
			<br>
			<input type="radio" name="opcion" value="recordar">
			Recordar en esta computadora el mail ingresado.
			<br>
			<input type="radio" name="opcion" value="norecordar">
			No recordar.
			<br>
			<input type="submit" value="confirmar">
		</form>
	</body>
</html>