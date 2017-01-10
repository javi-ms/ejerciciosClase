<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<!--
		Definir un vector con los nombres de los dias de la semana. Luego imprimir el primero y el ultimo
		elemento del vector.
		-->
	</head>

	<body>
		<form action="#" method="POST">
			<input type="submit" name="enviar" value="Dia Semana">
		</form>

			<?php
				$semana = array(
					
					"Lunes" => "Lunes",
					"Martes" => "Martes", 
					"Miercoles" => "Miercoles", 
					"Jueves" => "Jueves",
					"Viernes" => "Viernes", 
					"Sabado" => "Sabado",
					"Domingo" => "Domingo", 
				
				);
				if (isset($_POST['enviar'])) {
					echo $semana['Lunes']." ";
					echo $semana['Domingo'];
				}
			?>
	</body>
</html>