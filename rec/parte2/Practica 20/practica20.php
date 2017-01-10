<!DOCTYPE html>
<html>
<head>
	<!--
		Ya existe una tabla llamada: CURSOS en la base de datos PHPFACIL. Efecturar el alta de la tabla. La
		tabla de cursos tiene la siguiente estructura:
		CREATE TABLE ‘cursos’ (
		‘codigo’ int(11) NOT NULL auto_increment,
		‘nombrecur’ varchar(40) NOT NULL,
		PRIMARY KEY (‘codigo’) )
	-->
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="curso">
		<br/>
		<input type="submit" name="enviar">
	</form>
</body>
</html>