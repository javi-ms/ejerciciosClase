<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>PRACTICA 6</title>
	</head>
	<body>
		
		<?php
		/*
		Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de dos enteros: 
		$num = rand(1,100); 
		En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 
		1 y 100. Hacer un programa que lo muestre por pantalla al valor generado. Mostrar ademas si es 
		menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable tambien utilizamos el 
		comando ECHO 
		*/
			$num = rand(1,100);
			if ($num<=50) {
				echo "el numero es menor o igual= " . $num;
			}else{
				echo "El numero es mayor que 50= " . $num;
			}

		?>
	</body>
</html>