<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>PRACTICA9</title>
	</head>
	<body>
		<?php 
		/*
			Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el numero (Ej. Si se genera el 3 
			lugo mostrar en la pagina el string “tres”). Para ver si una variable es igual a cierto valor debemos 
			plantear una condicion similar a: 
			If ($valor==3) 
			{ 
			//algorimo 
			}
		*/
			$numV = rand(1,5);
				if ($numV==1) {
					echo "el numero es el 1";
				}
				if ($numV==2) {
					echo "el numero es el 2";
				}
				if ($numV==3) {
					echo "el numero es el 3";
				}
				if ($numV==4) {
					echo "el numero es el 4";
				}
				if ($numV==5) {
					echo "el numero es el 5";
				}
		?>

	</body>
</html>