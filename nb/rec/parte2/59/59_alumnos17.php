<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<title>Problema</title>
	</head>
	<body>
		<?php
			if (isset($_COOKIE['usuario'])){
			echo "Cookie de sesión creada. Su valor es $_COOKIE[usuario]";
		}else{
			echo "No existe cookie de sesión";
		}
		?>
		<br>
		<a href="59_alumnos17-2.php">Crear cookie de sesión</a>
	</body>
</html>