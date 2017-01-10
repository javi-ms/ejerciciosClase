<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>Introduccion a los arrays, metodo corto</title>
	</head>
	<body>
		<h1> Introduccion a los arrays, metodo corto </h1>
		<p> A continuacion escribiremos los arrays de acuerdo al metodo corto </p>
		<p>
			<?php
			/*
				Este es el metodo corto para la creacion de arrays, donde cada todo el array
				puede estar en una sola linea de codigo.
				*/
				$dia = array( "domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado");
				//mostrar el miercoles
				echo $dia[0];
			?>
		</p>
		<ol>
			<li>¿Qué diferencia hay con el script 7? </li>
				<p>El array se ha declarado en una sola linea</p>
			<li>¿Cómo se ponen los comentarios?</li>
				<p>Se pueden poner</p>
				<ul>
					<li><.!----> </li>
					<li>//</li>
					<li>/***/</li>
				</ul>
		</ol>
	</body>
</html>