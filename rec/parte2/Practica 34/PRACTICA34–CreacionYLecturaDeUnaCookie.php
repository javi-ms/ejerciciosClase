<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<title>Problema</title>
		<!--
			Crear una cookie que almacene el nombre del visitante en el sitio y cada vez que ingresemos al sitio
			nos de la bienvenida imprimiendo nuestro nombre. Para cargar el nombre, crear un formulario con un
			control de tipo text
		-->
	</head>
	<body>
		<form action="practica34-2.php" method="post">
			Nombre <input type="text" name="nombre"
			value="<?php if (isset($_COOKIE['nombre'])) echo $_COOKIE['nombre'];?>">
			<input type="submit" name="enviar" value="enviar">
		</form>		
	</body>
</html>