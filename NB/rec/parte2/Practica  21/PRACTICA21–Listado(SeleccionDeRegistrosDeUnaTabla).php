º	<?php
/*
Confeccionar un programa que recupere los datos de la tabla CURSOS de la base de datos PHPFACIL
*/
$conexion=mysql_connect("localhost","root","usuario") or die("Problemas en la conexion");
mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
$registros=mysql_query("select cursos from cursos",$conexion) or
die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
	echo $reg["cursos"]." ";
}
mysql_close($conexion);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
	<title>PRACTICA 21 – Listado (seleccion de registros de una tabla)</title>
</head>
<body>

</body>
</html>