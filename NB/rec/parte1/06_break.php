<html> 
	<head> 
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
	  <title></title> 
	</head> 
	<body> 
		<h1>Break en la ventana del navegador </h1> 
		<p> 
			<?php 
				$Name = "Miguel"; 
				echo "Hola <b>$Name</b>, encantado de conocerte<br>
				"; 
				echo "Gracias por venir!"; 
			?> 
			<ol>
				<li>¿Qué es lo que hace el script?</li>
					<p>No lo realiza por que no esta concatenado, lo considera parte del texto</p>
			</ol>
		</p> 
	</body> 
</html> 