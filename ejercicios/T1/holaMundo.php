
<!DOCTYPE html>
<html>
<head>
	<title>Prueba 1- Hola Mundo</title>
</head>
<body>
	<?php
		echo "Hola Mundo";
		echo "<hr>";
		echo "<a href=\"vercodigo.php?src=holaMundo.php\">ver codigo</a><br/>";

			 
		echo "<a href=\"<?php echo 'index.php?page=/vercodigo.php?src=holaMundo.php'; ?>\">ver codigo2</a><br/>";

		echo "<a href=\"indexT1.php\">volver</a><br/>";	
	?>

</body>
</html>