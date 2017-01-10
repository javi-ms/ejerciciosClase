<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<title>Problema</title>
	</head>
	<body>
		<h1>Alta de Alumnos</h1>
		<form action="ejercicio43Alta-2.php" method="post">
			Ingrese nombre:
			<input type="text" name="nombre"><br>
			Ingrese mail:
			<input type="text" name="mail"><br>
			Seleccione el curso:
			<select name="codigocurso">
				<option value="1">PHP</option>
				<option value="2">ASP</option>
				<option value="3">JSP</option>
			</select>
			<br>
			<input type="submit" value="Registrar">
		</form>
	</body>
</html>