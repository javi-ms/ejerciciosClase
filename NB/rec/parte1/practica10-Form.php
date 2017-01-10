<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<!--Confeccionar un formulario que solicite la carga de un nombre de persona y su edad, luego mostrar en
			otra pagina si es mayor de edad (si la edad es mayor o igual a 18).-->
	</head>
	<body>
		<form action="mostrarEdad.php" method="post">
			Nombre <input type="text" name="nombre">
			Edad <input type="number" name="edad">
			<input type="submit" name="enviar" value="enviar">
			
		</form>
	</body>
</html>