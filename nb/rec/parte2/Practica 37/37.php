<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
	<title>Incluir un archivo externo (require_once)</title>
	<!--
		Confeccionar una librería que contenga una funcion llamada retornarConexion, la misma debe llamar a
		las funciones mysql_connect y mysql_select_db y retornar la variable que genero la funcion
		mysql_connect.
		Tener en cuenta que a esta funcion la deben implementar en el archivo “pagina2.php”. En el archivo
		“pagina1.php” incluir la librería que contiene la funcion retornarConexion. Luego imprimir todos los
		registros de la tabla ALUMNOS.
	-->
</head>
<body>
	<?php
		require_once("37.2.php");
		retornarConexion("Conexion realizada");
		consultaBD("consulta realizada");
	?>
</body>
</html>