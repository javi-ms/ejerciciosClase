<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<title>Problema</title>
	</head>
	<body>
		<?php
			$conexion=mysql_connect("localhost","root","usuario") or die("Problemas en la conexion");
			mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
			
			$registros=mysql_query("select codigo,nombre, codigocurso from alumnos where mail='$_REQUEST[mail]'",$conexion) or
			die("Problemas en el select:".mysql_error());
			
			if ($reg=mysql_fetch_array($registros)){
			echo "Nombre:".$reg['nombre']."<br>";
			echo "Curso:";
				switch ($reg['codigocurso']) {
					case 1:
						echo "PHP";
					break;
					case 2:
						echo "ASP";
					break;
					case 3:
						echo "JSP";
					break;
				}
			}else{
				echo "No existe un alumno con ese mail.";
			}
			mysql_close($conexion);
		?>
	</body>
</html>