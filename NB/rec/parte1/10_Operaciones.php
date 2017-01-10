<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
	 	<title>Ejemplo de operaciones</title>
	</head>
	<body>
		<h1>Ejemplo de operaciones aritmeticas en PHP</h1>
			<?php
				$a = 8;
				$b = 3;
					echo "Suma = " . $a + $b, "<br>";
					echo "Resta = " . $a - $b, "<br>";
					echo "Multiplicación = ". $a * $b, "<br>";
					echo "División = ". $a / $b, "<br>";
				$a++ ;
					echo "Incremento = " . $a,"<br>";
				$b--;
					echo "Decremento = " 	. $b,"<br>";
			?>
			<ol>
				<li>¿Cómo se declara una variable numerica en php?</li>
					<p>$nombreVariable</p>
				<li>¿Cómo se realiza una operación con variables numericas?</li>
					<p>Con los simbolos de operacion
						<ul>
							<li>+</li>
							<li>-</li>
							<li>*</li>
							<li>/</li>
						</ul>
					</p>
				<li>¿Es posible mostrar en pantalla en una misma linea cadenas y numeros?</li>
					<p>Si, es posible</p>
				<li>¿Cómo incrementamos una variable?</li>
					<p>$variable++ </p>
			</ol>
	</body>
</html> 
