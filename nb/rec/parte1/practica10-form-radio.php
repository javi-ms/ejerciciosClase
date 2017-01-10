<html>
	<head>
		<!--Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio
		que nos permitan seleccionar si la persona:
		1) no tiene estudios
		2) estudios primarios
		3) estudios secundarios
		En la pagina que procesa el formulario mostrar el nombre de la persona y un mensaje indicando el tipo
		de estudios que posee.-->
	</head>	
	<body>
		<form action="mostrarEstudios.php" method="post"> 
			Nombre <input type="text" name="nombre">
			<br/>
			No tiene estudios<input type="radio" name="estudios">
			Estudios Primarios<input type="radio" name="estudios">
			Estudios secundarios<input type="radio" name="estudios">
			<input type="submit" name="enviar">
		</form>
	</body>
</html>