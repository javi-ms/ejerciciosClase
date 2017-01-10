<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="calendario.php">
	<label>Pon un mes</label>
	<input type="text" name="mes"> 
	<label>Pon un año</label>
	<input type="text" name="year"> 
	<input type="submit" name="enviar"> 
</body>
			<?php echo "<hr>";
			echo "<a href=\"vercodigo.php?src=calendario.php\">ver codigo</a><br/>";	
			echo "<a href=\"indexFormulario.php\">volver</a><br/>";
			 ?>
</html>