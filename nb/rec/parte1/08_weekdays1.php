<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		 <title>Introduccion a los arrays, metodo largo</title>
	</head>
	<body>
		<h1> Introduccion a los arrays, metodo largo </h1>
		<p> A continuacion escribiremos los arrays de acuerdo al metodo largo </p>
		<p>
			<?php
			/*
			Este es el metodo largo para la creacion de arrays, donde cada uno de los
			arreglos esta en una linea diferente, junto con su valor indice correspondiente
			*/
				$dia[0] = "domingo";
				$dia[1] = "lunes";
				$dia[2] = "martes";
				$dia[3] = "miercoles";
				$dia[4] = "jueves";
				$dia[5] = "viernes";
				$dia[6] = "sabado";
				//mostrar el miercoles
				echo $dia[6];
			?>
		</p>
		<ol>
			<li>¿Qué es un array?</li>
				<p>Es una estructura de datos que nos permite almacenar una gran cantidad de datos de un mismo tipo</p>
			<li>¿Cómo declaramos un array?</li>
				<p>$nombreArray</p>
		</ol>
	</body>
</html> 