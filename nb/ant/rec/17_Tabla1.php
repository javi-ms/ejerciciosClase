<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>Tabla condicional</title>
	</head>
	<body>
		<h1>Tabla condicional 1</h1>
			<?php
				/* Crearemos una tabla de valores de seno y coseno de 0 a 2 en incrementos de 0.01. Los valores negativos que resulten los queremos  mostrar en rojo, y los valores positivos en azul */
				/* En primer lugar vamos a crear una funcion con las condicionales. Aqui estamos usando la sentencion de FUNCTION al que le pasamos un valor dependiendo de este valor, ejecutamos una condicion IF..ELSE...y asignamos un color al tipo de letra para generar la tabla
				*/
				function muestra($valor) {
					if ($valor < 0.5)
						$color = "red";
					else
						$color = "blue";
					echo "<td><font color='$color'>$valor</font></td>\n";
				}
			?>
				<table border="1">
			<?php
				for ($x=0; $x<=2; $x+=0.01){
					echo "<tr>";
						muestra($x);
						muestra(sin($x));
						muestra(cos($x));
					echo "</tr>";
				}
			?>
			<ol>
				<li>Explica que es lo que hace el script</li>
					<p>Crea una tabla con todos los resultados posibles de senos y cosenos entre 0 y 2</p>
			</ol>
	</body>
</html>