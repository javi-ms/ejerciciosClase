<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
	<title>parte2</title>
</head>
<body>
	<a href="PRACTICA34–CreacionYLecturaDeUnaCookie.php">Volver Atras</a>
	<?php
		if(isset($_POST['enviar'])) {
			echo $_COOKIE[$_POST['nombre']];
			
		}
	?>
	
</body>
</html>