<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>Contador Sencillo</title>
	</head>
	<body>
		<h1>Contador Sencillo</h1>
		<p>Cantidad de visitas:
			<b>
				<?php
					// Para el contador necesitamos un archivo de texto externo donde almacenamos
					// las visitas
					// Aqui se veran las funciones para trabajar con archivos, en este caso
					// abrir, leer, grabar y cerrar. El contador simplemente se va sumando.
					$fp = fopen("counter.txt", "r+");
					$counter = fgets($fp, 7);
						echo $counter;
					$counter ++;
					rewind($fp);
					fputs($fp, $counter);
					fclose($fp);
					

				?>
			</b>
		</p>
		<br/>
		<ol>
			<li>¿Qué hace la funcion fOpen()?</li>
				<p> Abre un fichero o un URL</p>
			<li>¿Qué hace fgets()?</li>
				<p>Obtiene una línea desde el puntero a un fichero</p>
			<li>¿Qué hace rewind()?</li>
				<p>Rebobina la posición de un puntero a un archivo</p>
			<li>¿Qué hace fputs()?</li>
				<p>Es un alias de: fwrite()</p>
			<li>¿Qué hace fclose()?</li>
				<p>Cierra un puntero a un archivo abierto</p>
			<li>¿Por qué necesitamos counter.txt?</li>
				<p>Por que necesitamos un fichero para usar los comandos anteriores</p>
		</ol>
	</body>
</html>