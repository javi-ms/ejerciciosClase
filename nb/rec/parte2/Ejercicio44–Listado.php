<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
		<title>Problema</title>
	</head>
	<body>
		<?php
			$conexion=mysql_connect("localhost","root","usuario") or die("Problemas en la conexion");
			mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
			$registros=mysql_query("select codigo,nombre, mail, codigocurso
			from alumnos",$conexion) or die("Problemas en el select:".mysql_error());
			while ($reg=mysql_fetch_array($registros)){
				echo "Codigo:".$reg['codigo']."<br>";
				echo "Nombre:".$reg['nombre']."<br>";
				echo "Mail:".$reg['mail']."<br>";
				echo "Curso:";
				switch ($reg['codigocurso']) {
					case 1:echo "PHP";
					break;
					case 2:echo "ASP";
					break;
					case 3:echo "JSP";
					break;
				}
				echo "<br>";
				echo "<hr>";
			}
			mysql_close($conexion);
		?>
	</body>
</html>