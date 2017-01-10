<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<title>MySQL 01 - Consulta a BD (Agenda)</title>
	</head>
	<body>
		<?php
			$dp = mysql_connect("localhost", "root", "usuario" );
				mysql_select_db("AGENDA", $dp);
			$sql = "SELECT * FROM direcciones" ;
			$resultado = mysql_query($sql);
				echo"	<h1>Mostrar Nombres de la Agenda. BD </h1>";
			while ($row = mysql_fetch_assoc($resultado)) {
				echo "$row[Nombre] $row[Apellido]<br>\n";
			}
				mysql_close($dp);
		?>
	</body>
</html>